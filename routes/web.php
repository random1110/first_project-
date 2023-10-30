<?php

use App\Http\Controllers\AdmainAuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\WebAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'Admain'], function (){
    Route::get('/login',[AdmainAuthController::class , 'login'])->name('login.post');
    Route::get('/login',[AdmainAuthController::class , 'loginShow'])->name('login');
    Route::get('/logout',[AdmainAuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => '/'], function (){
    Route::get('/login' , [WebAuthController::class , 'login'])->name('login.post');
    Route::get('/login' , [WebAuthController::class , 'loginShow'])->name('login');
    Route::get('/logout' , [WebAuthController::class, 'logout'])->name('logout');
    Route::get('/register',[WebAuthController::class, 'register'])->name('register.post');
    Route::get('/register' ,[WebAuthController::class, 'registerShow'])->name('register');
    Route::get('/profile' ,[WebAuthController::class , 'pro'])->name('pro.post');
});



Route::get('/categories', [CategoriesController::class,'index']);
Route::get('/countries', [CountriesController::class,'index']);
Route::get('/users', [UsersController::class,'index']);
Route::get('/carts', [CartsController::class,'index']);
Route::get('/orders', [OrdersController::class,'index']);
Route::get('/products', [ProductsController::class,'index']);
Route::get('/subscriptios', [SubscriptiosController::class,'index']);
