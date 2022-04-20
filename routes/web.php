<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\SalesController;

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
//     return view('home');
// });

//REGISTER
Route::get('terms', [LoginAuthController::class, 'terms'])->name('terms');
Route::get('/', [Dashboard::class, 'dashboard'])->name('home');
Route::get('login', [LoginAuthController::class, 'index'])->name('login');
Route::post('custom-login', [LoginAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [LoginAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [LoginAuthController::class, 'signOut'])->name('signout');

//PASSWORD RESET
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//AGENTS ROUTES
Route::get('commission', [AgentsController::class, 'commission'])->name('commission');
Route::get('create', [AgentsController::class, 'create'])->name('create');
Route::post('create_agent', [AgentsController::class, 'create'])->name('create.agent');
Route::get('agents', [AgentsController::class, 'show'])->name('agents');

//SALES ROUTES
Route::get('sales', [SalesController::class, 'show'])->name('sales');
Route::get('pay', [SalesController::class, 'pay'])->name('pay');
