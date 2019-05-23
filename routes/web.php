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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// /**
//  * Login Route(s)
//  */
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// /**
//  * Register Route(s)
//  */
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// /**
//  * Password Reset Route(S)
//  */
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// /**
//  * Email Verification Route(s)
//  */
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/seamco', function () {
    return view('seamco.seamco');
});
Route::get('/seamco', function () {
    return view('seamco.index');
});
Route::get('/seamco/seamco_FAQs', function () {
    return view('seamco.seamco_FAQs');
});
Route::get('/seamco/seamco_contact', function () {
    return view('seamco.seamco_contact');
});
Route::get('/seamco/seamco_membership', function () {
    return view('seamco.seamco_membership');
});
Route::get('/seamco/seamco_register', function () {
    return view('seamco.seamco_register');
});
Route::get('/seamco/seamco_member_login', function () {
    return view('seamco.seamco_member_login');
});
Route::get('/seamco/seamco_admin_login', function () {
    return view('seamco.seamco_admin_login');
});
