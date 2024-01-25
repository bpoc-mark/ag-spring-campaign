<?php
/**
 * Sending mail using php mailer
 * @version 1.0.0
 * @author ShogoKinoshita <shogo.kinoshita@argog.co.jp>
 */

require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/monolog.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/mail.php';
require_once DOCROOT . 'contact/send_functions.php';
session_start();


// メインプロセス
if (!isset($_GET["step"])) {
    $monolog->info('入力画面表示', ["status"=>"no step","server_info"=>server_info()]);
    $_SESSION = array();
    includeWithVariables(DOCROOT . 'contact/contact.php', [
        'config' => $config,
        'step' => 'input'
    ]);
    exit();
} 

// メインプロセス
if (isset($_GET["step"]) && $_GET["step"] == "input") {
    $monolog->info('入力画面表示', ["status"=>"input step","server_info"=>server_info()]);
    unset($_SESSION["ERROR"]);
    includeWithVariables(DOCROOT . 'contact/contact.php', [
        'config' => $config,
        'step' => 'input'
    ]);
    exit();
} 


// 確認ページへの処理
if (isset($_GET["step"]) && $_GET["step"] == "confirm" && !empty($_POST)) {
    $monolog->info('確認処理開始', ["status"=>"confirm step","server_info"=>server_info()]);
    unset($_SESSION["ERROR"]);

    // validationチェック
    $_SESSION["POST"] = $_POST;
    $error = validation($_SESSION["POST"]);
    if (!empty($error)) {
        $_SESSION["ERROR"] = $error;
        // メールアドレスに問題ある時 → フォーム画面へ
        includeWithVariables(DOCROOT . 'contact/contact.php', [
            'config' => $config,
            'step' => 'input'
        ]);
        $monolog->info("バリデーションエラー", ["error"=>$error,"server_info"=>server_info()]);
        exit();
    }

    // 確認画面の表示
    setToken();
    $monolog->info('確認画面表示', ["status"=>"","server_info"=>server_info()]);
    includeWithVariables(DOCROOT . 'contact/contact.php', [
        'config' => $config,
        'step' => 'confirm',
        'token' => $_SESSION['token']
    ]);
    exit();
} 


// 完了ページへの処理
if (isset($_GET["step"]) && $_GET["step"] == "send") {
    $monolog->info("送信フロー開始", ["status"=>"send step","server_info"=>server_info()]);

    // 送信フローの実行
    checkToken();
    prepareAttachment();
    
    //$monolog->info("送信処理: ", ["status"=>"send begin","post_data"=>$_SESSION["POST"],"server_info"=>server_info()]);
    send_function();
    $monolog->info("送信完了", ["status"=>"send end","server_info"=>server_info()]);
    header("location:" . BASEURL . "contact/thanks.php");
    exit();
}

// それ以外の処理
$monolog->info("不明な状態", ["status"=>"failed","server_info"=>server_info()]);
header("location:/contact/");

