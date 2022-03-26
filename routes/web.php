<?php

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
    return $router->app->version();
});

$router->get('/apis/v1/books', 'BookController@listbook');
$router->post('/apis/v1/books/comments/{book_isbn}', 'CommentController@savecomments');
$router->get('/apis/v1/books/comments', 'CommentController@index');
$router->get('/apis/v1/characters', 'CharacterController@listCharacter');
$router->get('/apis/v1/characters/sortby/{param}', 'CharacterController@index');
$router->get('/apis/v1/characters/filterby/{param}', 'CharacterController@filterCharacter');