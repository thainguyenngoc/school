<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', [
    'as' => 'root',
    'uses' => 'FrontEnd\StaticController@getHome',
    'middleware' => ['web']
]);

$router->group([
    'as' => 'front-end.',
    'middleware' => ['web']
], function ($router) {
    /** @var \Illuminate\Routing\Router $router */
    /**
     * Authentication
     */
    $router->get('login', 'FrontEnd\Auth\AuthController@getLogin');
    $router->post('login', ['as' => 'login', 'uses' => 'FrontEnd\Auth\AuthController@postLogin']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
