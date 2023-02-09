<?php

use Illuminate\Support\Facades\Route;

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

Route::get('_blank-rtl', function () {
    return view('_blank-rtl');
});
Route::get('_blank', function () {
    return view('_blank');
});
Route::get('apps-calendar', function () {
    return view('apps-calendar');
});
Route::get('apps-chats', function () {
    return view('apps-chats');
});
Route::get('apps-file-manager', function () {
    return view('apps-file-manager');
});
Route::get('apps-inbox', function () {
    return view('apps-inbox');
});
Route::get('apps-kanban', function () {
    return view('apps-kanban');
});
Route::get('apps-messages', function () {
    return view('apps-messages');
});
Route::get('components', function () {
    return view('components');
});
Route::get('email-templates', function () {
    return view('email-templates');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('index-analytics', function () {
    return view('index-analytics');
});
Route::get('index-crypto', function () {
    return view('index-crypto');
});
Route::get('index-invest', function () {
    return view('index-invest');
});
Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('invoice-details', function () {
    return view('invoice-details');
});
Route::get('invoice-list', function () {
    return view('invoice-list');
});
Route::get('invoice-print', function () {
    return view('invoice-print');
});
Route::get('kyc-details-regular', function () {
    return view('kyc-details-regular');
});
Route::get('kyc-list-regular', function () {
    return view('kyc-list-regular');
});
Route::get('product-table', function () {
    return view('product-table');
});
Route::get('product-card', function () {
    return view('product-card');
});
Route::get('prodinfo', function () {
    return view('product-details');
});
Route::get('product-card', function () {
    return view('product-list');
});
Route::get('project-card', function () {
    return view('project-card');
});
Route::get('project-list', function () {
    return view('project-list');
});
Route::get('transaction-basic', function () {
    return view('transaction-basic');
});
Route::get('transaction-crypto', function () {
    return view('transaction-crypto');
});
Route::get('user-card', function () {
    return view('user-card');
});
Route::get('user-details-regular', function () {
    return view('user-details-regular');
});
Route::get('user-list-compact', function () {
    return view('user-list-compact');
});
Route::get('user-list-regular', function () {
    return view('user-list-regular');
});
Route::get('user-profile-activity', function () {
    return view('user-profile-activity');
});
Route::get('user-profile-notification', function () {
    return view('user-profile-notification');
});
Route::get('user-profile-regular', function () {
    return view('user-profile-regular');
});
Route::get('user-profile-setting', function () {
    return view('user-profile-setting');
});
Route::get('user-profile-social', function () {
    return view('user-profile-social');
});
