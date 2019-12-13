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

Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/rule', 'IndexController@rule')->name('rule');
Route::get('/faq', 'IndexController@faq')->name('faq');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/create', 'ContactController@create')->name('contact.create.index');
route::get('/article', 'ArticleController@index')->name('article');
route::get('/article/{articleSlug}', 'ArticleController@single');
route::get('/product', 'ProductController@product')->name('product');
route::get('/product/{productSlug}', 'ProductController@single');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/add/{fileId}', 'CartController@addcart')->name('add.cart');
Route::get('/cart/delete/{fileId}', 'CartController@DeleteCart')->name('delete.cart');
Route::get('/category/{category}', 'IndexController@category');
Route::post('/comment', 'IndexController@comment')->name('comment');
Route::post('/payment', 'PaymentController@index')->name('payment');
Route::get('/payment/check', 'PaymentController@check')->name('payment.check');
Route::get('/search', 'IndexController@search')->name('search');
Route::group(['namespace' => 'Admin', 'middleware' => ['auth:web', 'ChekAdmin'],
    'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('article', 'ArticleController');
    Route::resource('user', 'UserController');
    Route::get('/payment', 'PaymentController@index')->name('admin.payment');
    Route::get('/payment/{id}', 'PaymentController@show')->name('admin.payment.show');
    Route::get('comment/unsuccess', 'CommentController@unsuccess')->name('unsuccess');
    Route::resource('/comment', 'CommentController');
    Route::resource('/contact', 'ContactController');
   
});
route::group(['middleware' => 'auth', 'prefix' => 'panel'], function () {
    Route::get('/', 'UserPanelController@index')->name('user.panel');
    Route::get('/add/address/{user_id}', 'CartController@address')->name('add.address');
    Route::post('/address', 'CartController@add_address')->name('address');
    Route::put('/user/edit/{userid}','UserPanelController@update')->name('user.panel.update');
});

Auth::routes();
Route::get('/home', 'IndexController@index')->name('home');
