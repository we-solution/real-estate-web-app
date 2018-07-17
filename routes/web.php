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
/**
 *
 *
 * WEB FRONT-END
 *
 *
 */
Route::get('', 'FrontEnd\HomeFrontEndController@index');
Route::get('search', 'FrontEnd\HomeFrontEndController@search');
Route::get('category/{id}', 'FrontEnd\CategoryFrontEndController@index');
Route::get('product/{id}', 'FrontEnd\ProductFrontEndController@index');
Route::post('cookie/lang','FrontEnd\CookieStorageController@language');
Route::get('about', 'FrontEnd\AboutFrontController@index');
Route::get('privacy', 'FrontEnd\PrivacyFrontController@index');

Route::get('faqs', 'FaqController@index');






/**
 * AUTH ROUTE
 */
Auth::routes();

/**
 *
 *
 * DASHBOARD ADMIN
 *
 *
 */
Route::group(['prefix'=>'admin'],function(){

    Route::get('index', 'Admin\HomeAdminController@index');

    /**
     * SLIDE ROUTE
     */
    Route::get('slide','Admin\SlideController@index');
    Route::get('slide/create', 'Admin\SlideController@create');
    Route::post('slide/store','Admin\SlideController@store');
    Route::get('slide/edit/{id}','Admin\SlideController@edit');
    Route::get('slide/show/{id}','Admin\SlideController@show');
    Route::post('slide/update/{id}','Admin\SlideController@update');
    Route::get('slide/delete/{id}', 'Admin\SlideController@destroy');

    /**
     * POST ROUTE
     */
    Route::get('product','Admin\ProductController@index');
    Route::get('product/create', 'Admin\ProductController@create');
    Route::post('product/store','Admin\ProductController@store');
    Route::get('product/edit/{id}','Admin\ProductController@edit');
    Route::get('product/show/{id}','Admin\ProductController@show');
    Route::post('product/update/{id}','Admin\ProductController@update');
    Route::get('product/delete/{id}', 'Admin\ProductController@destroy');
    /**
     * CATEGORY
     */
    Route::get('category','Admin\CategoryAdminController@index');
    Route::get('category/create', 'Admin\CategoryAdminController@create');
    Route::post('category/store','Admin\CategoryAdminController@store');
    Route::get('category/edit/{id}','Admin\CategoryAdminController@edit');
    Route::get('category/show/{id}','Admin\CategoryAdminController@show');
    Route::post('category/update/{id}','Admin\CategoryAdminController@update');
    Route::get('category/delete/{id}', 'Admin\CategoryAdminController@destroy');

    /**
     * USER
     */
    Route::get('user','Admin\UserController@index');
    Route::get('user/create', 'Admin\UserController@create');
    Route::post('user/store','Admin\UserController@store');
    Route::get('user/edit/{id}','Admin\UserController@edit');
    Route::get('user/show/{id}','Admin\UserController@show');
    Route::post('user/update/{id}','Admin\UserController@update');
    Route::get('user/delete/{id}', 'Admin\UserController@destroy');


    /**
     * ROLE
     */
    Route::get('role','Admin\RoleController@index');
    Route::get('role/create', 'Admin\RoleController@create');
    Route::post('role/store','Admin\RoleController@store');
    Route::get('role/edit/{id}','Admin\RoleController@edit');
    Route::get('role/show/{id}','Admin\RoleController@show');
    Route::post('role/update/{id}','Admin\RoleController@update');
    Route::get('role/delete/{id}', 'Admin\RoleController@destroy');

});