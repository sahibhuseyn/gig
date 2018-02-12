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
// ================================= CLIENT ==============================================================

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'Client\MainController@index')->name('home');
    Route::post('/', 'Client\MainController@contactsEmail')->name('contacts_mail');

});


// ================================= END CLIENT ==============================================================

// ================================= ADMIN ==============================================================

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'dash'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_index');

    Route::group(['prefix' => 'teams'], function () {
        Route::get('/', 'Admin\TeamController@show')->name('admin_team');
        Route::post('/add', 'Admin\TeamController@add')->name('admin_team_add');
        Route::post('/{team}/update', 'Admin\TeamController@update')->name('admin_team_update');
        Route::post('/{team}/delete', 'Admin\TeamController@delete')->name('admin_team_delete');
    });

    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', 'Admin\ProjectController@show')->name('admin_project');
        Route::post('/add', 'Admin\ProjectController@add')->name('admin_projects_add');
        Route::post('/{project}/update', 'Admin\ProjectController@update')->name('admin_projects_update');
        Route::post('/{project}/delete', 'Admin\ProjectController@delete')->name('admin_projects_delete');
    });
});

// ================================= END ADMIN ==============================================================


Auth::routes();

