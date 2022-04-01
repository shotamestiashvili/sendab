<?php

use App\Models\PaypalIncomeRequest;
use Illuminate\Support\Facades\Route;

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


Route::get('/pe', [\App\Http\Controllers\TestController::class, 'pdfToEmail']);
Route::get('/pdf', [\App\Http\Controllers\TestController::class, 'createPDF']);
Route::get('/qr', [\App\Http\Controllers\TestController::class, 'qr']);

Route::get('/image', function (){

    \App\Models\OutcomeRequest::create([
        'user_id' => 1,
        'paypal_email' => 'sb-6u9ab14283851@personal.example.com',
        'requested_amount' => 24,
        'balance_amount' => 1,

    ]);

});


Route::get('/paypal', function (){

    return redirect()->away(PaypalIncomeRequest::where('id', 30)->value('link2'));

});


Route::get('testroute', function (\Illuminate\Http\Request $request){
    return $request->all();
})->name('testroute');


Route::post('/income', [\App\Http\Controllers\Api\Balance\IncomeController::class, 'income']);
Route::post('/income', [\App\Http\Controllers\Api\Balance\OutcomeController::class, 'outcome']);

Route::post('/balanceIn', [\App\Http\Controllers\Api\Balance\BalanceController::class, 'balanceIn']);
Route::post('/balanceOut', [\App\Http\Controllers\Api\Balance\BalanceController::class, 'balanceOut']);

//Route::get('/payment/token', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'token']);
//Route::post('/payment/pay', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'pay']);
//Route::get('/payment/approval', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'approval'])->name('approval');
//Route::get('/payment/cancelled', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'cancelled'])->name('cancelled');
//

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/client', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'processTransaction']);
//Route::get('/payout', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'payout']);
//
Route::get('/showPayout', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'showPayout']);
Route::get('/showOrder', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'showOrder']);



Route::get('create-paypal', [ \App\Http\Controllers\Api\Payment\PaymentController::class, 'createPaypal'])->name('createPaypal');

Route::get('create-transaction',[ \App\Http\Controllers\Api\Payment\PaymentController::class, 'create'])->name('create');
//Route::get('process-transaction', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'process'])->name('process');
Route::get('success-transaction', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'process'])->name('process');
Route::get('cancel-transaction', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'cancel'])->name('cancel');



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
