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



//Skill

Route::get('/skill/list', 'SkillController@index')
->name('list_all_skills')
->middleware('auth:admin');

Route::get('/skill/create', 'SkillController@create')
->name('create_skill');

Route::post('/skill/create', 'SkillController@store')
->name('store_skill');

Route::get('/skill/show/{id}', 'SkillController@show')
->name('show_skill');

Route::get('/skill/edit/{id}', 'SkillController@edit')
->name('edit_skill');

Route::post('/skill/edit/{id}', 'SkillController@update')
->name('update_skill');

Route::delete('/skill/destroy/{id}', 'SkillController@destroy')
->name('delete_skill');


//Profession

Route::get('/profession/list', 'ProfessionController@index')
->name('list_all_professions')
->middleware('auth:admin');

Route::get('/profession/create', 'ProfessionController@create')
->name('create_profession');

Route::post('/profession/create', 'ProfessionController@store')
->name('store_profession');

Route::get('/profession/show/{id}', 'ProfessionController@show')
->name('show_profession');

Route::get('/profession/edit/{id}', 'ProfessionController@edit')
->name('edit_profession');

Route::post('/profession/edit/{id}', 'ProfessionController@update')
->name('update_profession');

Route::delete('/profession/destroy/{id}', 'ProfessionController@destroy')
->name('delete_profession');

//Job

Route::get('/job/list', 'JobController@index')
->name('list_all_jobs')
->middleware('auth:admin');

Route::get('/job/create', 'JobController@create')
->name('create_job');

Route::post('/job/create', 'JobController@store')
->name('store_job');

Route::get('/job/show/{id}', 'JobController@show')
->name('show_job');

Route::get('/job/edit/{id}', 'JobController@edit')
->name('edit_job');

Route::post('/job/edit/{id}', 'JobController@update')
->name('update_job');

Route::delete('/job/destroy/{id}', 'JobController@destroy')
->name('delete_job');

//Candidate

Route::get('/candidate/list', 'CandidateController@index')
->name('list_all_candidates')
->middleware('auth:admin');

Route::get('/candidate/create', 'CandidateController@create')
->name('create_candidate');

Route::post('/candidate/create', 'CandidateController@store')
->name('store_candidate');

Route::get('/candidate/show/{id}', 'CandidateController@show')
->name('show_candidate');

Route::get('/candidate/edit/{id}', 'CandidateController@edit')
->name('edit_candidate');

Route::post('/candidate/edit/{id}', 'CandidateController@update')
->name('update_candidate');

Route::delete('/candidate/destroy/{id}', 'CandidateController@destroy')
->name('delete_candidate');

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