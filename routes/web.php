<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about-us', function () {
//     return view('about');
// });

Route::get('employeereg', [EmployeeController::class, 'employeereg']);
Route::post('store-employee', [EmployeeController::class, 'store']);
Route::get('employeelist', [EmployeeController::class, 'employeelist']);
Route::get('employee-edit/{id}', [EmployeeController::class, 'edit']);
Route::post('update-employee/{id}', [EmployeeController::class, 'update']);
Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);

# Routing

Route::get('/', [HomeController::class, 'home']);
Route::get('about-us', [HomeController::class, 'about']);


Route::get('login', [HomeController::class, 'login']);
Route::post('loginstore', [HomeController::class, 'loginstore']);
Route::get('register', [HomeController::class, 'register']);
Route::post('store-user', [HomeController::class, 'storeuser']);


Route::group(['middleware' => 'checkloggedin'], function(){
    Route::get('dashboard', [HomeController::class, 'dashboard']);
    Route::get('userlist', [HomeController::class, 'userlist']);
    Route::get('user-edit/{id}', [HomeController::class, 'edit']);
    Route::post('update-user/{id}', [HomeController::class, 'update']);
    Route::get('delete-user/{id}', [HomeController::class, 'delete']);
});

Route::get('logout', [HomeController::class, 'logout']);

Route::get('addservice', [HomeController::class, 'addservice']);
Route::post('store-service', [HomeController::class, 'storeservice']);

Route::get('servicelist', [HomeController::class, 'servicelist']);


// SSLCOMMERZ Start
Route::get('/example1', [EmployeeController::class, 'exampleEasyCheckout']);
Route::get('/example2', [EmployeeController::class, 'exampleHostedCheckout']);

Route::post('/pay', [EmployeeController::class, 'index']);
Route::post('/pay-via-ajax', [EmployeeController::class, 'payViaAjax']);

Route::post('/success', [EmployeeController::class, 'success']);
Route::post('/fail', [EmployeeController::class, 'fail']);
Route::post('/cancel', [EmployeeController::class, 'cancel']);

Route::post('/ipn', [EmployeeController::class, 'ipn']);
//SSLCOMMERZ END