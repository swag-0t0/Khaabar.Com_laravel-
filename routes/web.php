<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;

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
Route::get('/login',[TemplateController::class,'login'])->name('login');

Route::get('/payment',[TemplateController::class,'payment']);
Route::get('/cart',[TemplateController::class,'cart'])->name('cart');

Route::post('/addcart/{id}',[TemplateController::class,'addcart'])->name('addcart')->middleware('auth');
// Route::post('/showcart/{id}',[TemplateController::class,'showcart'])->name('showcart')->middleware('auth');

//food-menu-all
Route::get('/food-menu-all',[TemplateController::class,'food_menu_all']);


//food-menu
// Route::get('/food-menu',[TemplateController::class,'food_menu']);

//routes for admin pages
Route::get('/admin',[AdminController::class,'adminhome']);
Route::get('/adminform',[AdminController::class,'adminform']);
Route::get('/admintables',[AdminController::class,'admintables'])->name('admintables');

Route::get('/adminuserprofile',[AdminController::class,'adminuserprofile']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);       //deleting user from all user of ADMIN panel
//adminprofile
Route::get('/adminuserprofile',[AdminController::class,'adminuserprofile']);
Route::post('/profileinfo',[AdminController::class,'profileinfo']);

//routes for advirtise section controlling from admin form--will addd data to database
Route::post('/advertise_form',[AdminController::class,'advertise_form']);
Route::get('/deleteadvertise/{id}',[AdminController::class,'deleteadvertise']);

//routes for allfoods section--will add data to database
Route::post('/allfoods',[AdminController::class,'allfoods']);
Route::get('/allfoodsdelete/{id}',[AdminController::class,'allfoodsdelete']);

Route::get('/allfoodsupdateview/{id}',[AdminController::class,'allfoodsupdateview']);
Route::post('/allfoodsupdate/{id}',[AdminController::class,'allfoodsupdate']);

//payment 
Route::get('/payment',[PaymentController::class,'payment']);



//registration and signup process
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');
Route::post('/loginuser',[LoginController::class,'loginuser'])->name('loginuser');
Route::get('/after-user-login',[LoginController::class,'after_user_login'])->name('after-user-login');
Route::get('/after-admin-login',[LoginController::class,'after_admin_login'])->name('after-admin-login');


