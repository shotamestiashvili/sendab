<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::post('/upload/avatar/save',  [\App\Http\Controllers\Api\Upload\AvatarController::class, 'save']);
//Route::get( '/upload/avatar/get',    [\App\Http\Controllers\Api\Upload\AvatarController::class, 'getAvatar']);
//Route::post('/upload/document/save',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'save']);
//Route::get('/upload/document/front',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'getDocumentFront']);
//Route::get('/upload/document/back',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'getDocumentBack']);
//Route::get('/upload/document/selfie',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'getDocumentSelfie']);
//##############  FAQ  ####################################################################################
//Route::get('/faq/get', [\App\Http\Controllers\Api\FAQ\FaqController::class, 'getFaq']);
//##############  FAQ  END####################################################################################
//##############  FAQ  ####################################################################################
//Route::post('/support/save', [\App\Http\Controllers\Api\Suppport\SupportController::class, 'save']);
////Route::get('/support/get', [\App\Http\Controllers\Api\Suppport\SupportController::class, 'get']);
//##############  FAQ  END####################################################################################


Route::middleware('auth:sanctum')->group(function(){


##############  Partnior  ####################################################################################
    Route::post('/becomePartner', [\App\Http\Controllers\Api\Partner\PartniorController::class, 'becomePartner'])
        ->name('bocomePartner');

    Route::get('/getMyPartnersOffers', [\App\Http\Controllers\Api\Partner\PartniorController::class, 'getMyPartnersOffers'])
        ->name('getMyPartnersOffers');

    Route::post('/getPartnersOffersByUserId', [\App\Http\Controllers\Api\Partner\PartniorController::class, 'getPartnersOffersByUserId'])
        ->name('getPartnersOffersByUserId');

    Route::get('/getAllPartnersOffers', [\App\Http\Controllers\Api\Partner\PartniorController::class, 'getAllPartnersOffers'])
        ->name('getAllPartnersOffers');
##############  Partnior End  ####################################################################################



##############  Offer  ####################################################################################

    Route::post('offer/createOffer', [\App\Http\Controllers\Api\Offer\OfferController::class, 'createOffer'])->
    name('createOffer');

    Route::get('offer/getAllOffers', [\App\Http\Controllers\Api\Offer\OfferController::class, 'getAllOffers'])->
        name('getAllOffers');

    Route::get('offer/getMyAllOffers', [\App\Http\Controllers\Api\Offer\OfferController::class, 'getMyAllOffers'])->
    name('getMyAllOffers');

    Route::get('offer/getMyOffersBasedStatus', [\App\Http\Controllers\Api\Offer\OfferController::class, 'getMyOffersBasedStatus'])->
    name('getMyOffersBasedStatus');

    Route::get('offer/getOffersByUserId', [\App\Http\Controllers\Api\Offer\OfferController::class, 'getOffersByUserId'])->
    name('getOffersByUserId');

    Route::get('offer/getOffersByUserIdandStatus', [\App\Http\Controllers\Api\Offer\OfferController::class, 'getOffersByUserIdandStatus'])->
    name('getOffersByUserIdandStatus');

    Route::post('offer/editMyOffer', [\App\Http\Controllers\Api\Offer\OfferController::class, 'editMyOffer'])->
    name('editMyOffer');

    Route::get('offer/editOfferByUserId', [\App\Http\Controllers\Api\Offer\OfferController::class, 'editOfferByUserId'])->
    name('editOfferByUserId');


##############  Offer End  ####################################################################################



##############  USER  ####################################################################################
    Route::post('/logout',
        [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::post('/password/change',
        [\App\Http\Controllers\Api\Auth\PasswordController::class, 'changePassword'])
        ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
        ->name('changepassword');
##############  USER  END####################################################################################


##############  USER Profile ####################################################################################
    Route::get('/profile/get', [\App\Http\Controllers\Api\Profile\ProfileController::class, 'userProfile'])
        ->name('getPartners');

    Route::post('/profile/update', [\App\Http\Controllers\Api\Profile\ProfileController::class, 'userUpdate'])
        ->name('getPartners');
##############  USER Profile  END####################################################################################


##############  Upload  ####################################################################################
    Route::post('/upload/avatar/save',  [\App\Http\Controllers\Api\Upload\AvatarController::class, 'save']);
    Route::get( '/upload/avatar/get',    [\App\Http\Controllers\Api\Upload\AvatarController::class, 'getAvatar']);
    Route::post('/upload/document/save',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'save']);
    Route::get('/upload/document/front',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'getDocumentFront']);
    Route::get('/upload/document/back',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'getDocumentBack']);
    Route::get('/upload/document/selfie',  [\App\Http\Controllers\Api\Upload\DocumentController::class, 'getDocumentSelfie']);
##############  Upload EMD ####################################################################################

##############  Order  ####################################################################################
    Route::post('/order/create',  [\App\Http\Controllers\Api\Order\OrderController::class, 'createORder']);
    Route::get('/order/get',  [\App\Http\Controllers\Api\Order\OrderController::class, 'getOrder']);
##############  Order END ####################################################################################

##############  Paypal ####################################################################################
    Route::get('create-transaction',[ \App\Http\Controllers\Api\Payment\PaymentController::class, 'create'])->name('create');
    //Route::get('process-transaction', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'process'])->name('process');
    Route::get('success-transaction', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'process'])->name('process');
    Route::get('cancel-transaction', [\App\Http\Controllers\Api\Payment\PaymentController::class, 'cancel'])->name('cancel');
##############  Paypal  End####################################################################################


});
