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
Route::get('/',[userController::class,'index'])->name('website');


//-----------------ALL AUTH Route--------------------------------  
// register form view
Route::get('/Auth/Register',[AuthController::class,'Register'])->name('userregisterform');
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
Route::middleware([validuser::class])->group(function () {
Route::get('/admin/dashboard',[adminController::class,'dashboard'])->name('dashboard');
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
Route::get('/admin/vaccine/allchildren', [adminController::class, 'fetchchildren'])->name('fetchchildren');

Route::get('admin/addhospitals',[adminController::class,'addhospitals'])->name('addhospitals');
Route::get('/admin/appointments',[adminController::class, 'admin'])->name('admin.appointments');


Route::post('/admin/appointments/{id}/approve',[adminController::class, 'approve'])->name('admin.appointment.approve');

Route::post('/admin/appointments/{id}/reject',[adminController::class, 'reject'])->name('admin.appointment.reject');
});
// Form  logic
Route::post('/admin/vaccine/store', [adminController::class, 'store'])->name('admin.vaccine.store');
Route::get('/admin/vaccine/all', [adminController::class, 'fetchvaccine'])->name('allvaccine');

//--------------------Parents dashbaord view---------------------------
 Route::middleware([parentverify::class])->group(function () {
    Route::get('/parent/addchildform', [parentController::class, 'create'])->name('createchild');
    Route::get('/parent/dashboard', [parentController::class, 'dashboard'])->name('parentdashboard');
    Route::get('/parent/childdeatils/{id}', [parentController::class, 'childdeatils'])->name('child');
Route::get('admin/editchild/{id}',[parentController::class,'editchild'])->name('editchild');
    Route::get('/parent/childprofile', [parentController::class, 'childprofile'])->name('childprofile');
      Route::get('/parent/vaccinations',[parentController::class, 'childvaccine'])->name('parent.vaccinations');
  

    Route::get('/parent/appointment/{child_id}/{vaccination_id}',[parentController::class, 'booking'])->name('parent.appointment.create');

    Route::post('/parent/appointment',[parentController::class, 'store'])->name('parent.appointment.store');

});
//--------------------Parents dashbaord innerconnection---------------------------

 Route::post('/user/addchild', [parentController::class, 'addchild'])->name('addchild');
Route::post('user/updatechild/{id}',[parentController::class,'updatechild'])->name('updatechild');


//------------------------hospital dashbaor--------------------------
Route::middleware([hospitalmember::class])->group(function () {


Route::get('/hospital/dashboard',[hospitalController::class,'dashboardhospital'])->name('hospitaldashboard');



Route::get('/hospital/vaccines', [HospitalController::class, 'vaccines'])->name('hospital.vaccines');

Route::post('/hospital/vaccines/{vaccination_id}/status', [HospitalController::class, 'updateVaccineStatus'])
    ->name('hospital.vaccine.status');

Route::get('/hospital/appointments', [HospitalController::class, 'appointments'])
    ->name('hospital.appointments');

Route::post('/hospital/approve/{id}', [HospitalController::class, 'complete'])
    ->name('hospital.appointment.complete');

});
 //--------------------user website ke sare routes-------------//
Route::get('/user', function () {
    return view('user.home');
});

//for vaccine//
Route::get('/home', function () {
    return view('user.home');
});
Route::get('/vaccines', function () {
    return view('user.vaccines');
});

Route::get('/about', function () {
    return view('user.about');
});
Route::get('/location', [UserController::class, 'location']);


Route::get('/hospitals',[userController::class,'hospitals'])->name('hospitals');
//hospitalDashboard view
Route::get('/hospital/dashboard',[adminController::class,'dashboard'])->name('hospital')->middleware(validuser::class);


Route::get('/auth.register', function () {
    return view('auth.register');
});
///user appointment main wala form

Route::get('/appointment/book/{child_id}/{vaccination_id}',[userController::class, 'create'])->name('appointment.create');


Route::post('/appointment/store',[userController::class, 'store'])->name('appointment.store');

// Add Hospital form
Route::get(
    'admin/addhospitals',
    [adminController::class, 'addhospitals']
)->name('addhospitals');


// Save Hospital
Route::post(
    'admin/addhospitals',
    [adminController::class, 'storehospital']
)->name('storehospital');



