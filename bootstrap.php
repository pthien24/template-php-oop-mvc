<?php
define('__DIR_ROOT',__DIR__);
// echo __DIR__;

//xu ly http root
$webroot = 'http://'.$_SERVER['HTTP_HOST'];

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $webroot = 'https://'.$_SERVER['HTTP_HOST'];
}

$filename = basename( __DIR_ROOT);
$webroot =  $webroot .'/'.$filename;
// echo $folder;
define('__web__root',$webroot);
require_once 'configs/app.php';
require_once 'app/App.php';
require_once 'core/Controller.php'; // load base controller

