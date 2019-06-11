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
Route::view('/ElaAdmin/', 'ElaAdmin.pages.home');
Route::view('/ElaAdmin/forms-basic', 'ElaAdmin.forms.pages.basic');
Route::view('/ElaAdmin/forms-advanced', 'ElaAdmin.forms.pages.advanced');
Route::view('/ElaAdmin/tables-basic', 'ElaAdmin.tables.pages.basic');
Route::view('/ElaAdmin/tables-data', 'ElaAdmin.tables.pages.data');
Route::view('/ElaAdmin/maps-gmap', 'ElaAdmin.maps.pages.gmap');
Route::view('/ElaAdmin/maps-vector', 'ElaAdmin.maps.pages.vector');
Route::view('/ElaAdmin/font-fontawesome', 'ElaAdmin.font.pages.fontawesome');
Route::view('/ElaAdmin/font-themify', 'ElaAdmin.font.pages.themify');
Route::view('/ElaAdmin/widgets', 'ElaAdmin.widgets.pages.widgets');

Route::get('/ElaAdmin/ui-{ui}', function($ui){
    return view()->exists("ElaAdmin.ui.pages.$ui") ? view("ElaAdmin.ui.pages.$ui") : abort(404);
});
Route::get('/ElaAdmin/charts-{chart}', function($chart){
    return view()->exists("ElaAdmin.charts.pages.$chart") ? view("ElaAdmin.charts.pages.$chart") : abort(404);
});

Route::get('/ElaAdmin/auth-{auth}', function($auth){
    return view()->exists("ElaAdmin.auth.pages.$auth") ? view("ElaAdmin.auth.pages.$auth") : abort(404);
});

