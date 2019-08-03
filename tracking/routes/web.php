<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function ()  {
    return view('index');
});

$router->get('/api/cookie', function () use ($router) {
  if(!isset($_COOKIE['session_id'])) {
    $random = str_random(10);
    setcookie('session_id', $random, time() + (86400 * 30), "/");
    print($random);
  }

  else {
    print($_COOKIE['session_id']);
  }
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->post('users', ['uses' => 'PostController@users']);
  $router->post('keys', ['uses' => 'PostController@keys']);
  $router->post('clicks', ['uses' => 'PostController@clicks']);
  $router->post('moves', ['uses' => 'PostController@moves']);
});
