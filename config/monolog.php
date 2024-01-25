<?php
if (!file_exists(DOCROOT . 'vendor/autoload.php')) die('ERROR: run "composer install" first');
if (!file_exists(DOCROOT . 'config/mail.php')) die('ERROR: make "config/mail.php" first');

require_once DOCROOT . 'vendor/autoload.php';
require_once DOCROOT . 'config/mail.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

if (!file_exists($config["logFile"]["dir"])) {
    mkdir($config["logFile"]["dir"], "0700", false);
}
try {
    $monolog = new Logger('all');

    // ハンドラーの作成
    $handler = new StreamHandler($config["logFile"]["dir"] . $config["logFile"]["name"]);
    $monolog->pushHandler($handler);
} catch (\Exception $e) {
    die($e->getMessage());
}

// サーバー情報
function server_info()
{
    $server_info = array(
        "SCRIPT" => $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"],
        "REMOTE_ADDR" => $_SERVER["REMOTE_ADDR"],
        "HTTP_USER_AGENT" => $_SERVER["HTTP_USER_AGENT"]
    );
    return $server_info;
}
