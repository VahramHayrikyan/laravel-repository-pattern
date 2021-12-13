<?php

use App\Http\Controllers\ArticleContrloller;
use App\Http\Controllers\Web\V1\Auth\AuthController;
use App\Http\Controllers\Web\V1\Payment\PaypalController;
use App\Http\Controllers\Web\V1\Products\ProductController;
use App\Http\Controllers\Web\V1\SiteController;
use App\Http\Controllers\Web\V1\User\UserController;
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
Route::view('/quests','yii.quests.index');
Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/trove',[SiteController::class,'trove']);
Route::get('/full-article',[ArticleContrloller::class,'index']);
Route::get('/store',[SiteController::class,'store']);
Route::get('/store/product/{id}',[ProductController::class,'storeProductById']);
Route::get('/giveaways', [SiteController::class, 'giveaways']);
Route::post('/add/{product}/cart',[ProductController::class,'addProductToCart']);
Route::post('/remove/{product}/cart',[ProductController::class,'removeProductFromCart']);
Route::get('/cart',[SiteController::class,'cart']);
Route::get('/media',[SiteController::class,'media']);
Route::get('/articles',[SiteController::class,'articles']);
Route::get('/arcades',[SiteController::class,'arcades']);
Route::get('/arcade/{id}/play',[SiteController::class,'play']);
Route::get('/quests',[SiteController::class,'quests']);
Route::group(['middleware'=>'guest'],function (){
    Route::get('/login',[AuthController::class,'loginIndex'])->name('login');
    Route::post('login',[AuthController::class,'login']);
    Route::get('/register',[AuthController::class,'registerIndex']);
    Route::post('register',[AuthController::class,'register']);
});
// TODO:: When Auth Start
Route::group(['middleware'=>'auth'],function (){
    Route::get('/checkout',[SiteController::class,'checkout'])->name('checkout');
    Route::post('/checkout',[SiteController::class,'checkoutPost']);
    Route::post('/paypal', [PaypalController::class,'payWithPayPal'])->name('paypal');
    Route::get('/paypal/success',[PaypalController::class,'getPaymentStatus'])->name('paypal_status');
    Route::delete('logout',[AuthController::class,'logout']);
//    TODO:: USER
    Route::group(['prefix'=>'user'],function (){
        Route::get('/account', [UserController::class, 'storeAccount'])->name('store.account');
        Route::get('/billingDetails',[UserController::class,'billingDetails']);
        Route::put('/billingDetails',[UserController::class,'billingDetailsPost']);
    });
});
// TODO:: When Auth End


// Store Account and Profile Pages

//Route::get('/account', [SiteController::class, 'storeAccount'])->name('store.account');

