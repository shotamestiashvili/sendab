<?php

use Illuminate\Support\Facades\Route;
use App\Services\TestClass;
use Illuminate\Support\Str;

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



Route::get('/payment/token', [\App\Http\Controllers\PaymentController::class, 'token']);
Route::post('/payment/pay', [\App\Http\Controllers\PaymentController::class, 'pay']);
Route::get('/payment/approval', [\App\Http\Controllers\PaymentController::class, 'approval'])->name('approval');
Route::get('/payment/cancelled', [\App\Http\Controllers\PaymentController::class, 'cancelled'])->name('cancelled');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/query', [\App\Http\Controllers\Api\Order\OrderController::class, 'getOrder']);




$limiter = config('fortify.limiters.login');
$twoFactorLimiter = config('fortify.limiters.two-factor');
$verificationLimiter = config('fortify.limiters.verification', '6,1');


##############  AUTH  ####################################################################################
Route::post('/register', [\App\Http\Controllers\Api\Auth\RegisterController::class, 'register'])
    ->middleware(['guest:'.config('fortify.guard')]);

Route::post('/login',
//    [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'store'])
    [\App\Http\Controllers\Api\Auth\LoginController::class, 'login'])
    ->middleware(array_filter([
        'guest:'.config('fortify.guard'),
        $limiter ? 'throttle:'.$limiter : null,
    ]))
    ->name('login');

Route::get('/verify/{id}/{remember_token}', [\App\Http\Controllers\Api\Auth\VerificationController::class, 'verifyEmail'])
    ->middleware(['guest'])
    ->name('verification.email');

Route::get('/password/reset', [\App\Http\Controllers\Api\Auth\PasswordController::class, 'ressetPassword'])
    ->middleware(['guest'])
    ->name('verification.email');
##############  AUTH  END ####################################################################################
