<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

//Add Beneficiary Show
Route::get('/addEmployee',[EmployeeController::class,'AddEmployee'])->name('addEmployee');

//Add Post Beneficiary 
Route::post('/addEmployee',[EmployeeController::class,'PostAddEmployee'])->name('PostAddEmployee');

//Edit Post Beneficiary
Route::put('/EditEmployee/{id}',[EmployeeController::class,'PostEditEmployee'])->name('PostEditEmployee');

//Show Master Table
Route::get('/masterTable',[EmployeeController::class,'masterTable'])->name('masterTable');