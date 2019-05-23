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