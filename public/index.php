<?php
require_once('../vendor/autoload.php');

$f3 = \Base::instance();

/* Config */
$f3->config('../app/config/config.ini');
$f3->config('../app/config/routes.ini');

$f3->run();
