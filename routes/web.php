<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmployeeController;


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
Route::get('/aa', function () {
    return view('layouts.cart');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/cart', function () {
    return view('cart');
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
Route::resource('cart',CartController::class);
//user routes
Route::resource('user',UserController::class);
Route::resource('valideOrder',OrderController::class);
// product routes
Route::resource('products',ProductController::class);
Route::post('/addCart/{productId}', [CartController::class, 'addcart']);
Route::post('/destroy/{id}', [CartController::class, 'destroy']);
//authentification routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//admin routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/products', [AdminController::class, 'ShowProduct'])->name("prod");
    Route::get('/dashboatd', [AdminController::class, 'ShowOrder'])->name("dash");
    Route::get('/employee', [AdminController::class, 'showEmployee'])->name("emp");
    Route::get('/setting', [AdminController::class, 'setting'])->name("sett");
    Route::post('/commandes/{client}' , [AdminController::class ,'serch'])->name('serch');
    Route::post('/employees' , [EmployeeController::class ,'store'])->name('empStore');
    Route::post('/destroy/{id}' , [EmployeeController::class ,'destroyEmp'])->name('empdestroy');

});



