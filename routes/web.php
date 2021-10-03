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
    return view('auth.Home');
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
//Route::get('/profile', function () {
//    return view('users.profile');
//});
Route::get('/term', function () {
    return view('users.term&condition');
});
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/list', function () {
    return view('admin.contactlist');
});
//Route::get('/dashboard', function () {
//    return view('admin.dashboard');
//});


route::get('Signup',[\App\Http\Controllers\Registercontroller::class, 'view'])->name('register');
route::post('Signup',[\App\Http\Controllers\Registercontroller::class, 'register']);

route::get('Login',[\App\Http\Controllers\LoginController::class,'view'])->name('Login');
route::post('Login',[\App\Http\Controllers\LoginController::class, 'login']);
route::post('Logout',[\App\Http\Controllers\Logout::class,'logout'])->name('Logout');

route::get('Apply',[\App\Http\Controllers\Coursecontroller::class,'view'])->name('ApplyForm');
route::get('Profile',[\App\Http\Controllers\Profilecontroller::class,'view'])->name('Profile');
Route::get("Submession", [\App\Http\Controllers\Submession::class, "index"])->name("Subbmession");
Route::post("Qualification", [\App\Http\Controllers\Submession::class, "qualificat"])->name("Qualification");
Route::post("Education", [\App\Http\Controllers\Submession::class, "educat"])->name("Education");
Route::post("Experience", [\App\Http\Controllers\Submession::class, "company"])->name("Experience");


route::get('contact',[\App\Http\Controllers\Contactcontroller::class,'view'])->name('contact');
route::post('contact',[\App\Http\Controllers\Contactcontroller::class, 'contacts']);

route::auth();

Route::post("/course-selection/apply", [\App\Http\Controllers\Coursecontroller::class, "apply"])->name("Course-Selection-Apply");

//Admin
Route::get("Dashboard", [\App\Http\Controllers\Admindashboard::class, "index"])->name("Dashboard");

