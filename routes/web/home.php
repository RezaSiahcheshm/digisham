<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SlideMenuController;

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


Route::get('/' , function () {
//    auth()->logout();
    return redirect(route('home'));
//    return view('emails.login-to-website');
});
Route::get('home' , [HomeController::class , 'index'])->name('home');
Route::get('restaurant' , [MenuController::Class , 'index'])->name('restaurant');
Route::get('comment' , [CommentController::Class , 'index'])->name('comment');
Route::get('information' , [InformationController::Class , 'index'])->name('information');

Route::middleware('auth')->group(function () {
    Route::get('slideMenu' , [SlideMenuController::Class , 'index'])->name('slideMenu');
});

Route::get('login' , [LoginController::class , 'showLoginForm'])->name('login');
Route::post('login' , [LoginController::class , 'login']);
Route::post('register' , [LoginController::class , 'register'])->name('register');
Route::get('token' , [LoginController::class , 'showTokenForm'])->name('token');
Route::post('token' , [LoginController::class , 'token']);
Route::post('logout' , [LoginController::class , 'logout'])->name('logout');


