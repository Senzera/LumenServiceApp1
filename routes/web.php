<?php
use App\Http\Controllers\CustomController;
use App\Http\Middleware\CustomMiddleware;
use App\Http\Controllers\PostController;

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
$router->get('/login', 'LoginController@index');
$router->post('/login', 'LoginController@login');

$router->get('/register', 'RegisterController@index');
$router->post('/register', 'RegisterController@register');

// $router->get('/profile', 'ProfileController@index', ['middleware' => AuthMiddleware::class]);
// $router->get('/dashboard', 'DashboardController@index', ['middleware' => AuthMiddleware::class]);

// $router->get('/logout', 'LogoutController@index', ['middleware' => AuthMiddleware::class]);

$router->get('/hello-lumen', function() {
    return"<h1>Lumen</h1><p>Hi good developer, Thank for using Lumen</p>";
}) ;
$router->get('/hello-lumen/{name}', function($name) {
    return"<h1>Lumen</h1><p>Hi <b>". $name . "</b>, Thank for using Lumen</p>";
}) ;
$router->get('/scores', ['middleware' => 'login', function(){
    return "<h1>Selamat</h1><p>Nilai anda 100</p>";
}]);
$router->get('users', 'UsersController@index');
$router->get('posts','PostController@index');
$router->get('Categories', 'CategoriesController@index');
$router->get('Comment', 'CommentController@index');
$router->get('/Tags','TagsController@index');
$router->get('/Users','UsersController@index');