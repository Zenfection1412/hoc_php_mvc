<?php

define('_DIR_ROOT', $_SERVER["DOCUMENT_ROOT"]);

// Xử lý http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443){
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
}else{
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

define('_WEB_ROOT', $web_root);

require_once 'configs/routes.php';
require_once 'core/Route.php';
require_once 'app/App.php';
require_once 'core/Controller.php';
?>