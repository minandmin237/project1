<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/abount', [HomeController::class, 'abount']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/hello/{name}/{age}', [HomeController::class, 'hello']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/post/edit/{id}', [PostController::class, 'edit']);
Route::post('/post/update/{id}', [PostController::class, 'update']);

Route::get('/aunt/login', [AuntController::class, 'login']);
Route::post('/aunt/doLogin', [AuntController::class, 'doLogin']);
Route::get('/aunt/register', [AuntController::class, 'register']);
Route::post('/aunt/doRegister', [AuntController::class, 'doRegister']);

Route::get('/calculator/{num1}/{num2}', function ($num1, $num2) {
    return "ผลบวกของเลข $num1 และ $num2 คือ " . ($num1 + $num2);
});
