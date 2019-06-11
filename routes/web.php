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
Route::view('/', 'Inspinia.layouts.app');

Route::get('home-{home}',function($home){
    return view()->exists("Inspinia.pages.home-$home") ? view("Inspinia.pages.home-$home") : abort(404);
});

Route::get('graph-{graph}',function($graph){
    return view()->exists("Inspinia.graph.pages.$graph") ? view("Inspinia.graph.pages.$graph") : abort(404);
});
