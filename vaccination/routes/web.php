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
//vacine upload
//form view         
Route::get('/admin/vaccine/create', [adminController::class, 'create'])->name('admin.vaccine.create');

// Form  logic
Route::post('/admin/vaccine/store', [adminController::class, 'store'])->name('admin.vaccine.store');

//--------------------Parents dashbaord view---------------------------
 Route::middleware([parentverify::class])->group(function () {
    Route::get('/parent/addchildform', [parentController::class, 'create'])->name('createchild');
    Route::get('/parent/dashboard', [parentController::class, 'dashboard'])->name('parentdashboard');
    Route::get('/parent/childdeatils/{id}', [parentController::class, 'childdeatils'])->name('child');
Route::get('admin/editchild/{id}',[parentController::class,'editchild'])->name('editchild');
    Route::get('/parent/childprofile', [parentController::class, 'childprofile'])->name('childprofile');
    });
//--------------------Parents dashbaord innerconnection---------------------------

 Route::post('/user/addchild', [parentController::class, 'addchild'])->name('addchild');
Route::post('user/updatechild/{id}',[parentController::class,'updatechild'])->name('updatechild');


//------------------------hospital dashbaor--------------------------

Route::get('/hospital/dashboard',[hospitalController::class,'dashboard'])->name('hospitaldashboard')->middleware(hospitalmember::class);

































//parentDashboard view
Route::get('/admin/dashboard',[adminController::class,'dashboard'])->name('dashboard')->middleware(validuser::class);
Route::get('/user', function () {
    return view('user.home');
});
//hospitalDashboard view
Route::get('/hospital/dashboard',[adminController::class,'dashboard'])->name('dashboard')->middleware(validuser::class);
