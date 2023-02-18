<?php

/* Iniciar Serviços */
@session_start();

/* Configurações do Site */
define('__SYS_NAME__', "FlexUniverseTec");

if ($_SESSION['SERVER_NAME'] != $_SERVER['SERVER_NAME']) {
    $exdom = explode('.', $_SERVER['SERVER_NAME']);
    foreach ($exdom as $ind => $v) {
        if ($ind > 0) {
            $name[] = $v;
        }
    }
    $_SESSION['SUB_DOMAIN'] = $exdom[0];
    $_SESSION['SERVER_NAME'] = implode('.', $name);
    define('_DOMAIN_', $_SESSION['SERVER_NAME']);
}

define('__DB_PASS__', "dev123");
define('__DB_NAME__', "flexdev");
define('__DB_USER__', "flexdev");
define('__DB_HOST__', "75.101.241.242");
?>