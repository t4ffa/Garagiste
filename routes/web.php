<?php

use App\Models\Stock;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/admin',[AdminController::class,'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/stocks', [StockController::class, 'index'])->name('stocks.index');
    Route::post('/stocks/search', [StockController::class, 'search'])->name('stocks.search');
    Route::post('/stocks/show', [StockController::class, 'show'])->name('stocks.show');
    Route::post('/stocks/delete', [StockController::class, 'delete'])->name('stocks.delete');
});