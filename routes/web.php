<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('users.Home');
});
//Route::get('/Apply', function () {
//    return view('users.Applyform');
//});
//Route::get('/contact', function () {
//    return view('users.contact');
//});
Route::get('/profile2', function () {
    return view('admin.profile');
});
Route::get('/profile', function () {
    return view('users.profile');
});
Route::get('/term', function () {
    return view('users.term&condition');
});
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/list', function () {
    return view('admin.contactlist');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


route::get('Signup',[\App\Http\Controllers\Registercontroller::class, 'view'])->name('users.register');
route::post('Signup',[\App\Http\Controllers\Registercontroller::class, 'register']);

route::get('Login',[\App\Http\Controllers\LoginController::class,'view'])->name('Login');
route::post('Login',[\App\Http\Controllers\LoginController::class, 'login']);

route::get('Apply',[\App\Http\Controllers\Coursecontroller::class,'view'])->name('ApplyForm');
//route::post('Apply',[\App\Http\Controllers\Coursecontroller::class, 'login']);

route::get('contact',[\App\Http\Controllers\Contactcontroller::class,'view'])->name('contact');
route::post('contact',[\App\Http\Controllers\Contactcontroller::class, 'contacts']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

