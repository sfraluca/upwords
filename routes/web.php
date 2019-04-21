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
Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::group(['prefix' => '{locale}', 
  'where' => ['locale' => '[a-zA-Z]{2}'],'middleware' => 'setlocale'], function() {


Auth::routes();


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
->name('edit_candidates');

Route::post('/candidate/edit/{id}', 'CandidateController@update')
->name('update_candidates');

Route::delete('/candidate/destroy/{id}', 'CandidateController@destroy')
->name('delete_candidate');

});

Route::get('/','WebController@web')->name('website');
Route::get('/about','WebController@about')->name('about');
Route::get('/contact','WebController@contact')->name('contact');
Route::post('/contact','WebController@storeContact')->name('store_contact');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/choose', 'HomeController@choose')->name('profile_choose');
Route::get('/compare/{id}', 'HomeController@compare')->name('compare');
Route::get('/compare_vacancy/{id_vacancy}/{id_candidate}', 'HomeController@compare_vacancy')->name('compare_vacancy');
Route::get('/choose_vacancy/{id_candidate}', 'HomeController@choose_vacancy')->name('choose_vacancy');

Route::get('/search', 'HomeController@search')->name('search');


//JOB
Route::get('/job', 'HomeController@job')->name('job');
Route::get('/job/recent/week', 'HomeController@week')->name('week');
Route::get('/job/recent/day', 'HomeController@day')->name('day');
Route::get('/job/recent/month', 'HomeController@month')->name('month');

Route::get('/job/contact/{id}','HomeController@contactCandidate')->name('contact_candidate');
Route::post('/job/contact/{id}','HomeController@storeContactCandidate')->name('store_contact_candidate');

Route::get('/registration/job', 'HomeController@registrationJob')->name('registration_job');
Route::get('/profile/job/show/{id}', 'HomeController@profileJob')->name('profile_job');
Route::post('/registration/job', 'HomeController@storeJob')->name('store_vacancy');
Route::get('/edit/job/{id}', 'HomeController@editJob')->name('edit_vacancy');
Route::post('/edit/job/{id}', 'HomeController@updateJob')->name('update_vacancy');
Route::delete('/profile/vacancy/destroy/{id}', 'HomeController@destroyJob')->name('delete_vacancy');

//Freelancer
Route::get('/freelancer', 'HomeController@freelancer')->name('freelancer');
Route::get('/freelancer/recent/week', 'HomeController@weekFr')->name('freelancer_week');
Route::get('/freelancer/recent/day', 'HomeController@dayFr')->name('freelancer_day');
Route::get('/freelancer/recent/month', 'HomeController@monthFr')->name('freelancer_month');

Route::get('/freelancer/contact/{id}','HomeController@contactVacancy')->name('contact_vacancy');
Route::post('/freelancer/contact/{id}','HomeController@storeContactVacancy')->name('store_contact_vacancy');

Route::get('/registration/candidate', 'HomeController@registration')->name('registration_candidate');
Route::post('/registration', 'HomeController@store')->name('store_freelancer');
Route::get('/profile/candidate/show/{id}', 'HomeController@profileCandidate')->name('profile_candidate');
Route::get('/profile/candidate/edit/{id}', 'HomeController@editCandidate')->name('edit_candidate');
Route::post('/profile/candidate/update/{id}', 'HomeController@updateCandidate')->name('update_candidate');
Route::delete('/profile/candidate/destroy/{id}', 'HomeController@destroyCandidate')->name('deletecandidate');



});