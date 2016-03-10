<?php
require_once 'bootstrap.php';
$app = new  Slim\App();


//Routes
$app->get('/user/', 'App\user\controller\UserController:all');
$app->get('/user/{id}', 'App\user\controller\UserController:get');
$app->put('/user/','App\user\controller\UserController:add');
$app->post('/user/{id}','App\user\controller\UserController:update');
$app->run();
