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



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['prefix'=>'admin'], function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');

    //Password reset routes
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //User

    Route::get('/users/list', 'UserController@index')
    ->name('list_all_users')
    ->middleware('auth:admin');

    Route::get('/users/create', 'UserController@create')
    ->name('create_user');

    Route::post('/users/create', 'UserController@store')
    ->name('store_user');

    Route::get('/users/show/{id}', 'UserController@show')
    ->name('show_user');

    Route::get('/users/edit/{id}', 'UserController@edit')
    ->name('edit_user');

    Route::post('/users/edit/{id}', 'UserController@update')
    ->name('update_user');

    Route::delete('/users/destroy/{id}', 'UserController@destroy')
    ->name('delete_user');

});


Route::get('/','PostController@index')->name('home');

Route::get('/posts','PostController@index')->name('list_posts');

Route::group(['prefix'=>'posts'], function(){
    Route::get('/drafts', 'PostController@drafts')
        ->name('list_drafts')
        ->middleware('auth');

    Route::get('/show/{id}', 'PostController@show')
        ->name('show_post');

    Route::get('/create', 'PostController@create')
        ->name('create_post')
        ->middleware('can:create-post');

    Route::post('/create', 'PostController@store')
        ->name('store_post')
        ->middleware('can:create-post');

    Route::get('/edit/{post}', 'PostController@edit')
        ->name('edit_post')
        ->middleware('can:update-post,post');
        
    Route::post('/edit/{post}', 'PostController@update')
        ->name('update_post')
        ->middleware('can:update-post,post');

    Route::get('/publish/{post}', 'PostController@publish')
        ->name('publish_post')
        ->middleware('can:publish-post');

});