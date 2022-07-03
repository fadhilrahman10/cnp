<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MahasiswaController;

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

Auth::routes(['register' => false]);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', ClientController::class);
Route::resource('staff', StaffController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('mahasiswa', MahasiswaController::class);
Route::group(['middleware' => ['auth']], function(){
});

Route::middleware(['auth', 'checkRole'])->group(function() {
});

// Auth::routes();
