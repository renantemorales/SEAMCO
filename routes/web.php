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
Route::get('/', function () {
	return view('pages.Index.index');
});
Route::get('/pages', function () {
	return view('seamco.seamco');
});
Route::get('/pages/Index', function () {
	return view('pages.Index.index');
});
Route::get('/pages/FAQs/seamco_FAQs', function () {
	return view('pages.FAQs.seamco_FAQs');
});
Route::get('/pages/Contact/seamco_contact', function () {
	return view('pages.Contact.seamco_contact');
});
Route::get('/pages/Membership/seamco_membership', function () {
	return view('pages.Membership.seamco_membership');
});

Route::get('/pages/Register/seamco_register', 'Client\ClientRegistration@index')->name('register');
// Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login');
// Route::post('/pages/Register/seamco_register', [ 'as' => 'register', 'uses' => 'Client\ClientRegistration@index']);

Route::post('/pages/Register/seamco_register', 'Client\ClientRegistration@create')->name('register.create');
Route::get('/pages/Login/seamco_login', 'Auth\LoginController@index')->name('user.login');

Route::get('/pages/Service/seamco_service', function () {
	return view('pages.Service.seamco_service');
});

Route::get('/pages/Login/seamco_login', function () {
	return view('pages.Login.seamco_login');
});
Route::get('/pages/Service/seamco_service_saving', function () {
	return view('pages.Service.seamco_service_saving');
});
Route::get('/pages/Service/seamco_service_policy', function () {
	return view('pages.Service.seamco_service_policy');
});

// MESSAGE FROM CLIENT
Route::post('/Contact/seamco_contact', 'Message\MessageController@save')->name('message.save');