<?php

use App\Http\Controllers\Admin\AdminAuthController ;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminCountriesController;
use App\Http\Controllers\Web\WebAuthController;
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

Route::group(['prefix' => 'admin/'], function (){
    Route::group(['prefix' => 'dashboard/'], function () {
        Route::get('',[AdminHomeController::class,'index'])->name('admin.index');
    });
    Route::group(['prefix' => 'auth/'], function () {
        Route::post('login',[AdminAuthController::class , 'login'])->name('admin.login.post');
        Route::get('login',[AdminAuthController::class  , 'loginShow'])->name('admin.login');
        Route::get('logout',[AdminAuthController::class , 'logout'])->name('admin.logout');
    });
    Route::group(['prefix' => 'categories/'], function() {
        Route::get('', [AdminCategoriesController::class,'index'])->name('admin.categories.index');
        Route::post('add', [AdminCategoriesController::class,'add'])->name('admin.categories.add');
        Route::post('update', [AdminCategoriesController::class,'update'])->name('admin.categories.update');
        Route::get('delete', [AdminCategoriesController::class,'delete'])->name('admin.categories.delete');
    });
    Route::group(['prefix' => 'countries/'], function() {
        Route::get('', [AdminCountriesController::class,'index'])->name('admin.countries.index');
        Route::post('add', [AdminCountriesController::class,'add'])->name('admin.countries.add');
        Route::post('update', [AdminCountriesController::class,'update'])->name('admin.countries.update');
        Route::get('delete', [AdminCountriesController::class,'delete'])->name('admin.countries.delete');
    });
});

Route::group(['prefix' => '/'], function (){
    Route::group(['prefix' => 'auth'], function () {
    Route::post('/login' , [WebAuthController::class , 'login'])->name('web.login.post');
    Route::get('/login' , [WebAuthController::class , 'loginShow'])->name('web.login');
    Route::get('/logout' , [WebAuthController::class, 'logout'])->name('web.logout');
    Route::post('/register',[WebAuthController::class, 'register'])->name('web.register.post');
    Route::get('/register' ,[WebAuthController::class, 'registerShow'])->name('web.register');
    Route::post('/profile' ,[WebAuthController::class , 'prfoil'])->name('web.profile.post');
    });
});






// Route::get('/users', [UsersController::class,'index']);
// Route::get('/carts', [CartsController::class,'index']);
// Route::get('/orders', [OrdersController::class,'index']);
// Route::get('/products', [ProductsController::class,'index']);
// Route::get('/subscriptios', [SubscriptiosController::class,'index']);



