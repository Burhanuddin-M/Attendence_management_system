<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/addEmployee',[MyController::class,'AddEmployee'])->name('addEmployee');

//Post Beneficiary 
Route::post('/addEmployee',[MyController::class,'PostAddEmployee'])->name('PostAddEmployee');

//Show Master Table
Route::get('/masterTable',[MyController::class,'masterTable'])->name('masterTable');