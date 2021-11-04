<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Models\User;

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
    auth()->loginUsingId(1);
    return jdate()->format('y');

//    $user=User::find('1');
//    return $user->permissions()->get();
//    return auth()->loginUsingId(1);
//    auth()->logout();
//    if(Gate::allows('edit-user')){
//        return 'yes';
//    }
//    return 'no';
//    return redirect(route('home'));
//    return view('emails.login-to-website');
});
Route::get('home' , [HomeController::class , 'index'])->name('home');
Route::get('cafe/{cafe}' , [MenuController::Class , 'index'])->name('cafe');
Route::get('comment' , [CommentController::Class , 'index'])->name('comment');
Route::get('cafe/information/{cafe}' , [InformationController::Class , 'index'])->name('information');

Route::middleware('auth')->group(function () {
    Route::get('profile' , [ProfileController::Class , 'index'])->name('profile.index');
    Route::get('profile/edit' , [ProfileController::Class , 'edit'])->name('profile.edit');
    Route::patch('profile' , [ProfileController::Class , 'update'])->name('profile.update');
});

Route::get('login' , [LoginController::class , 'showLoginForm'])->name('login');
Route::post('login' , [LoginController::class , 'login']);
Route::post('register' , [LoginController::class , 'register'])->name('register');
Route::get('token' , [LoginController::class , 'showTokenForm'])->name('token');
Route::post('token' , [LoginController::class , 'token']);
Route::post('logout' , [LoginController::class , 'logout'])->name('logout');


