<?php

use App\Models\Post;

/** @var \Laravel\Lumen\Routing\Router $router */



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

$router->get('/', function () use ($router) {
    //return $router->app->version();
    echo "helloww";
});



$router->get('/post', function () use ($router) {

    $listaPost = Post :: all();

  
    return view('post', ['posts' => $listaPost]);
});


$router->get('/post/{id}', function ($id) use ($router) {
    // dd((int)$id);
    
    $listaPost = Post:: where('id', $id)->get();

  
    return view('post', ['posts' => $listaPost]);
});