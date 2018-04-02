<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', 'userController@show'); //show data
Route::post('/user', 'userController@create');//create new account
Route::patch('/user/edit/{id}', 'userController@update'); //update account
Route::delete('user/{id}', 'userController@destroy'); //delete account
Route::get('/user/get/{id}', 'userController@getByID'); //get by ID

Route::get('/artist', 'artistController@show'); //show artist
Route::post('/artist', 'artistController@create'); //create artist
Route::patch('/artist/edit/{id}', 'artistController@update'); //update artist
Route::delete('artist/{id}', 'artistController@destroy'); //delete artist
Route::get('/artist/get/{id}', 'artistController@getByID'); //get artist by ID

Route::get('/bank', 'bankController@show'); //show bank
Route::post('/bank', 'bankController@create'); //create bank
Route::patch('/bank/edit/{id}', 'bankController@update'); //update bank
Route::get('bank/{id}', 'bankController@destroy'); //delete bank
Route::get('/bank/get/{id}', 'bankController@getByID'); //get bank by ID

Route::get('/check_out', 'checkoutController@show'); //show purchase
Route::post('/check_out', 'checkoutController@create'); //create new purchase
Route::patch('/check_out/edit/{id}', 'checkoutController@update'); //update purchase
Route::delete('check_out/{id}', 'checkoutController@destroy'); //delete purchase
Route::get('/check_out/get/{id}', 'checkoutController@getByID'); //get by ID
Route::get('/check_out/all', 'checkoutController@showAll'); //show all data

Route::get('/product', 'productController@show'); //show products
Route::post('/product', 'productController@create'); //create new product
Route::patch('/product/edit/{id}', 'productController@update'); //update product
Route::delete('product/{id}', 'productController@destroy'); //delete product
Route::get('/product/get/{id}', 'productController@getByID'); //get product by ID

Route::post('login', 'AuthController@login');

Route::group([

    ['middleware' => ['jwt.auth']]

], function () {

    Route::get('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');
});