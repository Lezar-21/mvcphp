<?php
use Slim\App;
return function (App $app) {
    $app->get('/', 'App\Controllers\HomeController:index');
    $app->get ('/home', 'App\Controllers\HomeController:index');
};