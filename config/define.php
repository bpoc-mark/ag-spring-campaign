<?php
define('__ROOT__', dirname(__DIR__, 1));

// define BASEURL

if ( isset($_SERVER['HTTP_X_FORWARDED_PORT']) && $_SERVER['HTTP_X_FORWARDED_PORT'] == 443 ){
    define('BASEURL', "https://" . rtrim($_SERVER['SERVER_NAME'], "/") . "/");
} elseif (!empty($_SERVER['HTTPS'])) {
    define('BASEURL', "https://" . rtrim($_SERVER['SERVER_NAME'], "/") . (($_SERVER['SERVER_PORT'] != "443") ? ":" . $_SERVER['SERVER_PORT'] : "") . "/");
} else {
    define('BASEURL', "http://" . rtrim($_SERVER['SERVER_NAME'], "/") . (($_SERVER['SERVER_PORT'] != "80") ? ":" . $_SERVER['SERVER_PORT'] : "")  . "/");
}

// define DOCROOT
define('DOCROOT', rtrim($_SERVER['DOCUMENT_ROOT'], "/") . "/");
