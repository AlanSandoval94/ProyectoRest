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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('front/home');
});

Route::get('consulta', function(){
	return view('front/get');
});

Route::get('api', function(){
	return view('front/api');
});

Route::get('api/{table}/menu_id={id}', function($table,$id){
	$categorias = DB::table($table)->where('menu_id','=',$id)->get();
	return $categorias;
});

Route::get('api/{table}', function($table){
	$_SESSION['pass'] = $table;
	return view('front/data');
});

Route::post('api/{table}/save',function(Request $request){
	return ($request->all());
});