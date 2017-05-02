<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 01/05/2017
 * Time: 23:06
 */
use Corporatte\Application\Main;
use Corporatte\Core\Application;

require 'vendor/autoload.php';
/*
 * Create a application instance
 */
$app = Application::create();

$app->bind('app_path', __DIR__);

$app->register();

Main::init();

return $app->end();
