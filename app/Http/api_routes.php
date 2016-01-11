<?php


$router->get('hello', function () {
    return 'hello';
});
$router->get('tasks/hello', 'TaskController@hello');
//$router->group(['middleware' => 'guest'], function ($router) {
//    $router->resource('tasks', 'TaskController', ['except' => ['create']]);
//
//});

