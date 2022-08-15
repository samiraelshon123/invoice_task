<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
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



    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/registerUser', [RegisterController::class, 'registerUser']);


    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginUser', [LoginController::class, 'loginUser']);


    Route::get('/logout', [LogoutController::class, 'logout']);


    Route::get('/invoice', [InvoiceController::class, 'index']);
    Route::post('/product', [InvoiceController::class, 'product']);
    Route::post('/invoice', [InvoiceController::class, 'invoice']);

    Route::get('/get_data', [InvoiceController::class, 'get_data']);
    Route::get('/downloadPDF', [InvoiceController::class, 'downloadPDF']);



