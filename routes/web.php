<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/auth', function () {
    return view('indexAuth');
});
Route::get('/sinUp', function () {
    return view('adminSinUp');
})->name('sinUp');

Route::get('/index', function () {
    return view('adminLogin');
});

//user routes
Route::resource('user',UserController::class);

// product routes
Route::resource('products',ProductController::class);
Route::post('/addCart/{productId}', [HomeController::class, 'addcart']);
//authentification routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//admin routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/dashboard', function () {return view('dashboard');})->name('dash');

});



