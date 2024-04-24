<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[TemplateController::class,'index']);
Route::get('/login',[TemplateController::class,'login']);
Route::get('/payment',[TemplateController::class,'payment']);
Route::get('/cart',[TemplateController::class,'cart']);

//routes for admin pages
Route::get('/admin',[AdminController::class,'adminhome']);
Route::get('/adminform',[AdminController::class,'adminform']);
Route::get('/admintables',[AdminController::class,'admintables']);
Route::get('/adminuserprofile',[AdminController::class,'adminuserprofile']);



//registration and signup process
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');
Route::post('/loginuser',[LoginController::class,'loginuser'])->name('loginuser');
Route::get('/after-user-login',[LoginController::class,'after_user_login']);
Route::get('/after-admin-login',[LoginController::class,'after_admin_login']);
