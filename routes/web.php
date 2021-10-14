<?php

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



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::get('/', [
    'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);
Route::get('/profile', [
    'uses'=>'HomeController@getProfile',
    'as'=>'profile'
]);

Route::get('/market', [
    'uses'=>'ProductController@getMarket',
    'as'=>'shop.market'
]);
Route::get('/market', [
    'uses'=>'ProductController@getMarket',
    'as'=>'shop.market'
]);
Route::get('/order', [
    'uses'=>'ProductController@getOrder',
    'as'=>'shop.order'
]);

Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'
]);

Route::get('/shopping-cart',[
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart'
]);
Route::get('/payment',[
    'uses'=>'PaymentController@getPayment',
    'as'=>'payment'
]);
Route::get('/checkout',[
    'uses'=>'ProductController@getCard',
    'as'=>'card'
]);
Route::post('/checkout',[
    'uses'=>'ProductController@postCheckout',
    'as'=>'checkout'
]);
Route::get('/summary',[
    'uses'=>'ProductController@getInvoice',
    'as'=>'invoice'
]);
Route::get('/payment/paypal',[
    'uses'=>'PaymentController@getPaypal',
    'as'=>'payment.paypal'
]);
Route::get('/about',[
    'uses'=>'ProductController@getAbout',
    'as'=>'about'
]);


