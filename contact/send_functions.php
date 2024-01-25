<?php

/**
 * Sending mail using php mailer
 * @version 1.0.0
 * @author ShogoKinoshita <kino@oceanize.co.jp>
 */
require_once DOCROOT . 'vendor/autoload.php';
require_once DOCROOT . 'config/mail.php';
require_once DOCROOT . 'contact/export-csv.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * バリデーション
 */
function validation($params)
{
    global $config;
    global $monolog;
    // エラーフラグ初期化
    $error = array();
    
    foreach ($config['required_param'] as $key) {
        if ( $params["$key"] === "0" || $params["$key"] === 0 ) continue;
        if (!array_key_exists($key, $params) || empty($params["$key"])){
            $error[$key] = "{$key}は必須項目です";
            // $monolog->debug("必須未入力: {$key}" , $params);
        }
    }
    foreach ($config['required_checkbox_param'] as $key) {
        if (!array_key_exists($key, $params) || count($params["$key"]) == 0) {
            $error[$key] = "{$key}は必須項目です";
            // $monolog->debug("必須未入力: {$key}" , $params);
        }
    }
    
    // Email チェック
    $email = ($params["email"])?? "" ;
    if (!empty($email)) {
        $pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@([A-Za-z0-9][A-Za-z0-9\-]{0,61}[A-Za-z0-9]?\.)+[A-Za-z]+$/";
        if (!preg_match($pattern, $email)) {
            if (isset($error['email'])) {
                $error["email"] .= "不正な形式のメールアドレスです。";
            } else {
                $error["email"] = "不正な形式のメールアドレスです。";
            }
        }
    }
    if (isset($error['email']) && !empty($error["email"])) {
        $error["email"] = str_replace("email", "メールアドレス", $error["email"]);
    }
    
    return $error;
}
/**
 * スパム対策
 */
function block_spam($mail_params = array())
{
    global $config;
    ## 送信者のメールアドレスのドメイン、IPアドレスから除外する
    if (in_array($mail_params["user_mail_domain"], $config['black_list']["domain"])) {
        sendmail_log($mail_params["user_mail"] . " is rejected by domain: " . $mail_params["user_mail_domain"]);
        header("HTTP/1.0 502 Bad Gateway");
        exit();
    }
    if (in_array($mail_params["user_remote_addr"], $config['black_list']["ip"])) {
        sendmail_log($mail_params["user_mail"] . " is rejected by ip: " . $mail_params["user_remote_addr"]);
        header("HTTP/1.0 502 Bad Gateway");
        exit();
    }
}
/**
 * ワンタイムトークン発行
 */
function setToken()
{
    $token = strtr(substr(base64_encode(openssl_random_pseudo_bytes(32)), 0, 32), '/+', '_-');
    $_SESSION['token'] = $token;
}
/**
 * チェックトークン
 */
function checkToken()
{
    global $monolog;
    if (empty($_SESSION['token']) || ($_SESSION['token'] !== $_POST['token'])) {
        $monolog->error("ERROR: invalid token",["session" => $_SESSION['token'] ,"post" => $_POST['token'] ]);
        header("location:/contact/");
        exit();
    } else {
        $monolog->info("SUCCESS: token matched",["session" => $_SESSION['token'] ,"post" => $_POST['token'] ]);
    }
}
/**
 *
 * 添付ファイルについて準備
 *
 */
function prepareAttachment()
{
    global $config;
    if (isset($config['attachment_pdf']) && is_array($config['attachment_pdf'])) {
        foreach ($config['attachment_pdf'] as $pdf) {
            if (isset($pdf["url"]) && !empty($pdf["url"])) {
                $pdf_url = $pdf["url"];
                $pdf_name = !empty($pdf["pdf_name"]) ? $pdf["pdf_name"] : "添付のPDF";
                $column_name = !empty($pdf["column_name"]) ? $pdf["column_name"] : "PDF_URL";
                $_SESSION["post_data"][$column_name] = <<<__EOT__
                    <a href="{$pdf_url}">{$pdf_name}</a>
                __EOT__;
            }
        }
    } else {
        if (isset($config['attachment_pdf']["url"]) && !empty($config['attachment_pdf']["url"])) {
            $pdf_url = $config['attachment_pdf']["url"];
            $pdf_name = !empty($config['attachment_pdf']["pdf_name"]) ? $config['attachment_pdf']["pdf_name"] : "添付のPDF";
            $column_name = !empty($config['attachment_pdf']["column_name"]) ? $config['attachment_pdf']["column_name"] : "PDF_URL";
            $_SESSION["post_data"][$column_name] = <<<__EOT__
            <a href="{$pdf_url}">{$pdf_name}</a>
        __EOT__;
        }
    }
}
/**
 * 確認時の表示
 */
if (!function_exists("h")) {
    function h($text)
    {
        echo htmlspecialchars($text);
    }
}

/**
 * 確認時の表示
 */
if (!function_exists("h_br")) {
    function h_br($text)
    {
        echo nl2br(htmlspecialchars($text));
    }
}

/**
 * メール本文の埋め込み
 */
function fill_text($body, $array)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $body = str_replace("<_" . $key . "_>", implode("、", $value), $body);
        } else {
            if ($value == "") $value = '-';
            $body = str_replace("<_" . $key . "_>", nl2br($value), $body);
        }
    }
    return $body;
}

/**
 * チェックボックスを平文に変換
 */
function array2text($array)
{
    $new_array = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $new_array[$key] = implode("、", $value);
        } else {
            if ($value == "") $value = '-';
            $value = str_replace("\r\n", " ", $value);
            $value = str_replace("\r", " ", $value);
            $value = str_replace("\n", " ", $value);
            $new_array[$key] = $value;
        }
    }
    return $new_array;
}
/**
 * メール送信 1
 */
function sendmail_to_receptionist($mail_params)
{
    global $config;
    global $smtpConfig;

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->CharSet = "UTF-8";
        if ($smtpConfig['SMTPDebug'] > 0) {
            $mail->SMTPDebug = $smtpConfig['SMTPDebug'];
            $mail->Debugoutput = function ($str, $level) {
                sendmail_log("debug level $level; message: $str<br>");
            };
        }

        if ($smtpConfig["is_smtp"]) {
            $mail->isSMTP();                               // Set mailer to use SMTP
            $mail->Host = $smtpConfig['host'];             // Specify main and backup SMTP servers
            $mail->SMTPAuth = $smtpConfig['SMTPAuth'];     // Enable SMTP authentication
            $mail->Username = $smtpConfig['username'];     // SMTP username
            $mail->Password = $smtpConfig['password'];     // SMTP password
            $mail->SMTPSecure = $smtpConfig['secure']; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $smtpConfig['port'];             // TCP port to connect to
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
        } else {
            $mail->isSendmail();  // send mail from sendmail
        }

        // メールの差出人を固定
        if ($config['reply_to_fixed'] == 1) {
            $mail->addReplyTo($mail_params["user_mail"], $mail_params["user_name"]);
        }
        // 受取人
        $mail->setFrom($config['sender_email'], $config['sender_name']);

        // 複数受審者へのメールアドレス
        if (strstr($config['receptionist_email'], ",")) {
            $mails = explode(",", $config['receptionist_email']);
            foreach ($mails as $mail_to) {
                $mail->addAddress($mail_to);
            }
        } else {
            $mail->addAddress($config['receptionist_email']);      // Add a recipient Name is optional    
        }

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $config['receptionist_subject'];
        $mail->Body    = $mail_params["body"];
        $mail->AltBody = str_replace(array("<br/>", "<br>"), "", $mail_params["body"]);

        $mail->send();
        //sendmail_log("送信",["mail_params"=>$mail_params]);
    } catch (phpmailerException $e) {
        sendmail_log("ERROR:phpmailerException",["error"=>$e->errorMessage()]); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        sendmail_log("ERROR:other reason",["error"=>$e->errorMessage()]);  //Boring error messages from anything else!
    }
}
/**
 * メール送信 2 エントリー者へのメール
 */
function sendmail_to_user($mail_params)
{
    global $smtpConfig;
    global $config;
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->CharSet = "UTF-8";
        if ($smtpConfig['SMTPDebug'] > 0) {
            $mail->SMTPDebug = $smtpConfig['SMTPDebug'];
            $mail->Debugoutput = function ($str, $level) {
                sendmail_log("debug level $level; message: $str<br>");
            };
        }
        if ($smtpConfig["is_smtp"]) {
            $mail->isSMTP();                               // Set mailer to use SMTP
            $mail->Host = $smtpConfig['host'];             // Specify main and backup SMTP servers
            $mail->SMTPAuth = $smtpConfig['SMTPAuth'];     // Enable SMTP authentication
            $mail->Username = $smtpConfig['username'];     // SMTP username
            $mail->Password = $smtpConfig['password'];     // SMTP password
            $mail->SMTPSecure = $smtpConfig['secure'];     // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $smtpConfig['port'];             // TCP port to connect to
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
        }

        //Recipients
        $mail->setFrom($config['sender_email'], $config['sender_name']);
        if ($config['sender_email'] != $config['receptionist_email']) {
            $mail->addReplyTo($config['receptionist_email']);
        }
        $mail->addAddress($mail_params["user_mail"]);      // Add a recipient Name is optional

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $config["return_subject"];
        $mail->Body    = $mail_params["body"];
        $mail->AltBody = str_replace(array("<br/>", "<br>"), "", $mail_params["body"]);

        $mail->send();
        // sendmail_log("送信",["mail_params"=>$mail_params]);
    } catch (phpmailerException $e) {
        sendmail_log("ERROR:phpmailerException",["error"=>$e->errorMessage()]); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        sendmail_log("ERROR:other reason",["error"=>$e->errorMessage()]);  //Boring error messages from anything else!
    }
}
/**
 *
 * 送信フロー
 *
 */
function send_function()
{
    global $config;
    // define variables and set to empty values
    $mail_params["user_name"]        = $_SESSION["POST"]["email"];
    $mail_params["user_mail"]        = $_SESSION["POST"]["email"];
    $mail_params["user_mail_domain"] = strstr(trim($mail_params["user_mail"]), '@');
    $mail_params["user_remote_addr"] = $_SERVER["REMOTE_ADDR"];

    // block spam access.
    block_spam($mail_params);

    // Sender Server information
    $server_information  = "## 送信サーバー情報<br>\n";
    $server_information .= "----------------------------------------------<br>\n";
    $server_information .= "送信元: " . $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"] . "<br>\n";
    $server_information .= "送信日: " . date("Y/m/d H:i:s") . "<br>\n";
    $server_information .= "UserAgent: " . $_SERVER["HTTP_USER_AGENT"] . "<br>\n";
    $server_information .= "ipアドレス: " . $_SERVER["REMOTE_ADDR"] . "<br>\n";
    $server_information .= "----------------------------------------------<br>\n";

    //create mail body to Receptionist
    $mail_params["body"]  = "<br>\n";
    $mail_params["body"] .= fill_text($config["receptionist_body"], $_SESSION["POST"]);
    $mail_params["body"] .= "<br>\n";
    $mail_params["body"] .= $server_information;
    $mail_params["body"] .= "<br>\n";

    // save to csv
    $csv_path = $config["csvFile"]["dir"].$config["csvFile"]["name"];
    $post_record = array2text($_SESSION["POST"]);
    $post_record["created"] = date('Y-m-d H:i:s');
    $post_record["ip"] = $_SERVER['REMOTE_ADDR'];
    $csv_result = App\Services\Common\CsvService::createWithUtf8insertOne($csv_path, $post_record);

    // sending to receptionist
    sendmail_to_receptionist($mail_params);

    //create mail body to Receptionist
    $mail_params["body"]  = "<br>\n";
    $mail_params["body"] .= fill_text($config["return_body"], $_SESSION["POST"]);
    $mail_params["body"] .= "<br>\n";
    // sending to receptionist
    sendmail_to_user($mail_params);

    // Reset Session
    $_SESSION['token'] = "";
    session_unset();
    session_destroy();
}

/****************************************************************************/
// ログの実行
/****************************************************************************/
function sendmail_log($value)
{
    global $monolog;
    
    $log = "";
    if (is_array($value)) {
        $log .= "maillog:" . implode(",", $value);
    } else {
        $log .= "maillog:" . $value;
    }
    $monolog->info($log, server_info());
}






/****************************************************************************/
// Othre function
/****************************************************************************/
function includeWithVariables($filePath, $variables = array(), $print = true)
{
    /* 
    *  refer @ https://stackoverflow.com/questions/11905140/php-pass-variable-to-include
    */
    $output = NULL;
    if (file_exists($filePath)) {
        // Extract the variables to a local namespace
        extract($variables);
        // Start output buffering
        ob_start();
        // Include the template file
        include $filePath;
        // End buffering and return its contents
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;
}
function getHost()
{
    $possibleHostSources = array('HTTP_X_FORWARDED_HOST', 'HTTP_HOST', 'SERVER_NAME', 'SERVER_ADDR');
    $sourceTransformations = array(
        "HTTP_X_FORWARDED_HOST" => function ($value) {
            $elements = explode(',', $value);
            return trim(end($elements));
        }
    );
    $host = '';
    foreach ($possibleHostSources as $source) {
        if (!empty($host)) break;
        if (empty($_SERVER[$source])) continue;
        $host = $_SERVER[$source];
        if (array_key_exists($source, $sourceTransformations)) {
            $host = $sourceTransformations[$source]($host);
        }
    }
    $host = preg_replace('/:\d+$/', '', $host);
    if($_SERVER["SERVER_PORT"] !="80" OR $_SERVER["SERVER_PORT"] !="443") {
        $host = $host . ":" . $_SERVER["SERVER_PORT"];
    }
    return trim($host);
}
function getServerProtocol()
{
    if (
        isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
    ) {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    return $protocol;
}
function isLocalEnvironment()
{
    $whitelist = array('127.0.0.1', '::1', 'localhost');
    if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        return true;
    }
}
function console_log($data = null)
{
    return '<script> console.log(' . json_encode($data) . ')</script>';
}
function getResourceBase($type)
{
    switch ($type) {
        case 'css':
            return CSS;
            break;
        case 'js':
            return JS;
            break;
        case 'img':
            return IMG;
            break;
        case 'media':
            return MEDIA;
            break;
        case 'iconfont':
            return ICONFONT;
            break;
        case 'vendor':
            return VENDOR;
            break;
        case 'favicon':
            return FAVICON;
            break;
        default:
            return '';
            break;
    }
}
function resource($type = null, $file = null, $cacheBusting = false)
{
    $hostPath = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    $resourcePath = getResourceBase($type) . $file;
    $returnPath = '';
    $version = 0;
    if ($cacheBusting) {
        switch ($type) {
            case 'css':
            case 'js':
            case 'iconfont':
                if (file_exists(__ROOT__ . $resourcePath)) {
                    $version = date("YmdHis", filemtime(__ROOT__ . $resourcePath));
                }
                $returnPath =  $hostPath . $resourcePath . '?v=' . $version;
                break;
            default:
                $returnPath = $hostPath . $resourcePath;
                break;
        }
    } else {
        $returnPath = $hostPath . $resourcePath;
    }
    return $returnPath;
}
function resources($type = null, $files = [], $cacheBusting = false)
{
    $hostPath = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    $html = '';
    if (is_array($files) && $files != null) {
        switch ($type) {
            case 'css':
                $format = '<link rel="stylesheet" href="%s"/>';
                break;
            case 'js':
                $format = '<script type="text/javascript" src="%s"></script>';
                break;
        }
        foreach ($files as $file) {
            $fullPath = $temp = getResourceBase($type) . $file;
            $version = 0;
            if ($cacheBusting && file_exists(__ROOT__ . $temp)) {
                $version = date("YmdHis", filemtime(__ROOT__ . $temp));
            }
            $fullPath = $hostPath . $temp . '?v=' . $version;
            $html .= sprintf($format, $fullPath);
        }
        return $html . PHP_EOL;
    } else {
        throw new Exception('Files required array as parameter.' . PHP_EOL);
    }
}
function favicon($file)
{
    return  getServerProtocol() . getHost() . getResourceBase('favicon') . $file;
}

function callScript($fileName, $extension = 'php')
{
    $hostPath = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    $fullPath = "";
    if ($fileName != null) {
        if (file_exists(__ROOT__ . SCRIPT . $fileName . '.' . $extension)) {
            $fullPath .= $hostPath . SCRIPT . $fileName;
        }
    } else {
        $fullPath = "(unknown path)";
    }
    return $fullPath;
}
function redirect($url, $delay = 0, $statusCode = 303)
{
    if ($delay !== 0 && is_int($delay)) {
        header("refresh: $delay; url = $url");
    } else {
        header('Location: ' . $url, true, $statusCode);
    }
    die();
}
function checkSession()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}
function checkSessionId($id, $redirectIfEmpty = false, $redirectTo = "")
{
    checkSession();
    if (!isset($_SESSION[$id]) && $redirectIfEmpty) {
        redirect(getServerProtocol() . getHost() . '/' . $redirectTo);
    }
}
function forgetSessionId($id)
{
    checkSession();
    if (isset($_SESSION[$id])) {
        unset($_SESSION[$id]);
    }
}
if (!function_exists("h")) {
    function h($text)
    {
        echo nl2br(htmlspecialchars($text));
    }
}

