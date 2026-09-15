<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\hospitalController;
use App\Http\Controllers\parentController;
use App\Http\Controllers\userController;
use App\Http\Middleware\hospitalmember;
use App\Http\Middleware\parentverify;
use App\Http\Middleware\validuser;
use Illuminate\Support\Facades\Route;

//---------------------user web-------------------
Route::get('/user/web',[userController::class,'index'])->name('website');


//-----------------ALL AUTH Route--------------------------------  
// register form view
Route::get('/auth/register',[AuthController::class,'Register'])->name('userregisterform');
//login form view
Route::get('/Auth/login',[AuthController::class,'login'])->name('loginform');
//user register
Route::post('/auth/user/register',[AuthController::class,'userregister'])->name('userregister');
//user login
Route::post('/auth/user/login',[AuthController::class,'userlogin'])->name('userlogin');
// logout
Route::post('auth/user/logout',[AuthController::class,'logout'])->name('logout');
//  -------------------ALL AUTH Route--------------------------------  

//--------------------------AdminDashboard view------------------
Route::get('/admin/dashboard',[adminController::class,'dashboard'])->name('dashboard')->middleware(validuser::class);
// fetch data
Route::get('/admin/allusers',[adminController::class,'fetch'])->name('allusers');
// edituser
Route::get('admin/edituser/{id}',[adminController::class,'edituser'])->name('edituser');
// updateuser
Route::post('admin/update/{id}',[adminController::class,'updateuser'])->name('update');
// deleteuser
Route::get('admin/deleteuser/{id}',[adminController::class,'deleteuser'])->name('deleteuser');
//------------------------hospital dashbaor--------------------------

Route::get('/hospital/dashboard',[hospitalController::class,'dashboard'])->name('hospitaldashboard')->middleware(hospitalmember::class);
//--------------------Parents dashbaord view---------------------------
 Route::middleware([parentverify::class])->group(function () {
    Route::get('/parent/addchild', [parentController::class, 'create'])->name('createchild');
    
    Route::get('/parent/dashboard', [parentController::class, 'dashboard'])->name('parentdashboard');
    Route::get('/parent/childdeatils', [parentController::class, 'childdeatils'])->name('child');
    
    });
 Route::post('/user/addchild', [parentController::class, 'addchild'])->name('addchild');
    Route::post('/user/childdeatils', [parentController::class, 'childdea'])->name('createchilddeatils');









