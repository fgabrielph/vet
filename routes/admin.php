<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

        Route::resource('categories', 'Admin\Categories');
//        Route::get('admin/inventory/categories', 'Admin\Categories@index')->name('admin.categories'); // Views/Admin/Categories/Index
        Route::get('admin/records/clients', 'Admin\Records\Clients@index')->name('admin.records.clients'); // Views/Admin/Records/Clients/Index
        Route::get('admin/records/patients', 'Admin\Records\Patients@index')->name('admin.records.patients'); // Views/Admin/Records/Patients/Index
        Route::get('admin/records/history', 'Admin\Records\History@index')->name('admin.records.history'); // View/Admin/Records/History/Index








    });
});
