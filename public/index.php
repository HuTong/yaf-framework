<?php

define('APPLICATION_PATH', realpath(dirname(__FILE__).'/../'));

include APPLICATION_PATH.'/vendor/autoload.php';

$application = new Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
