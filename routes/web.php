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

Route::get('/', function () {
    return view('admin.dashboard.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/inventory/categories', 'Admin\Categories@index')->name('admin.categories'); // Views/Admin/Categories/Index
Route::get('admin/records/clients', 'Admin\Records\Clients@index')->name('admin.records.clients'); // Views/Admin/Records/Clients/Index
Route::get('admin/records/patients', 'Admin\Records\Patients@index')->name('admin.records.patients'); // Views/Admin/Records/Patients/Index
Route::get('admin/records/history', 'Admin\Records\History@index')->name('admin.records.history'); // View/Admin/Records/History/Index
