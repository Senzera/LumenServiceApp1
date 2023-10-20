
1<?php
use Illuminate\Support\Facades\Route;

// Routing untuk login dengan middleware AuthMiddleware
Route::post('/login', 'AuthController@login')->middleware('auth');

// Routing untuk akses sebagai pengguna 'user' dengan middleware UserMiddleware
Route::get('/user-dashboard', 'UserController@dashboard')->middleware('user');

// Routing untuk akses sebagai pengguna 'admin' dengan middleware AdminMiddleware
Route::get('/admin-dashboard', 'AdminController@dashboard')->middleware('admin');

// Routing untuk mengakses halaman produk dengan middleware ProductMiddleware
Route::get('/products', 'ProductController@index')->middleware('product');

// Routing dengan middleware CustomMiddleware
Route::get('/custom', 'CustomController@index')->middleware('custom');
