<?php

use lib;

header("Expires: Sun, 11 Apr 2010 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('Cache-Control: no-store, no-cache, must-revalidate');
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//PagerCur
$url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';
$pageCur = array_filter(explode('/', $url));

function pre($k)
{
    echo '<pre>';
    print_r($k);
    echo '</pre>';
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    if ($class != '') {
        require $class . '.php';
    }
});

//$db = new lib\connect();

switch ($pageCur[0]) {
    case 'ajax':
        include(__DIR__ . "/lib/ajax/$pageCur[1].php");
        break;
    default:
        break;
}