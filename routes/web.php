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

Route::view('/', 'ElaAdmin.pages.home');
Route::view('/forms-basic', 'ElaAdmin.forms.pages.basic');
Route::view('/forms-advanced', 'ElaAdmin.forms.pages.advanced');
Route::view('/tables-basic', 'ElaAdmin.tables.pages.basic');
Route::view('/tables-data', 'ElaAdmin.tables.pages.data');
Route::view('/maps-gmap', 'ElaAdmin.maps.pages.gmap');
Route::view('/maps-vector', 'ElaAdmin.maps.pages.vector');
Route::view('/font-fontawesome', 'ElaAdmin.font.pages.fontawesome');
Route::view('/font-themify', 'ElaAdmin.font.pages.themify');
Route::view('/widgets', 'ElaAdmin.widgets.pages.widgets');

Route::get('/ui-{ui}', function($ui){
    return view()->exists("ElaAdmin.ui.pages.$ui") ? view("ElaAdmin.ui.pages.$ui") : abort(404);
});
Route::get('/charts-{chart}', function($chart){
    return view()->exists("ElaAdmin.charts.pages.$chart") ? view("ElaAdmin.charts.pages.$chart") : abort(404);
});

Route::get('/auth-{auth}', function($auth){
    return view()->exists("ElaAdmin.auth.pages.$auth") ? view("ElaAdmin.auth.pages.$auth") : abort(404);
});
