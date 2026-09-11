<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\validuser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// register form view
Route::get('/auth/register',[AuthController::class,'Register'])->name('userregisterform');
//login form view
Route::get('/Auth/login',[AuthController::class,'login'])->name('loginform');
//user register
Route::post('/auth/user/register',[AuthController::class,'userregister'])->name('userregister');
//user login
Route::post('/auth/user/login',[AuthController::class,'userlogin'])->name('userlogin');

//AdminDashboard view
Route::get('/admin/dashboard',[adminController::class,'dashboard'])->name('dashboard')->middleware(validuser::class);
// fetch data
Route::get('/admin/allusers',[adminController::class,'fetch'])->name('allusers');
// edituser
Route::get('admin/edituser/{id}',[adminController::class,'edituser'])->name('edituser');
// updateuser
Route::post('admin/update/{id}',[adminController::class,'updateuser'])->name('update');
// deleteuser
Route::get('admin/deleteuser/{id}',[adminController::class,'deleteuser'])->name('deleteuser');

// logout
Route::post('admin/dsashboard/logout',[AuthController::class,'logout'])->name('logout');