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
//use DB;
use Illuminate\Support\Facades\Input;

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
	$tabla = $request->tabla;
	switch ($tabla) {
		case 'item_categorias':
			dump($request->all());
			/*$data = ['menu_id'=>$request->categoria_prod, 'item_name'=>$request->nombre_prod,'descripcion'=>$request->descripcion_prod,'precio'=>$request->precio_prod,'path'=>('images/'. $request->nombre_categ . "/" . $request->path_prod)];
			DB::table('item_categorias')->insert($data);*/
			//$request->path_prod->move(base_path().'/public/images'.$request->nombre_categ.'/', $request->path_prod);

			request()->file('path_prod')->store($request->nombre_categ,'public');

			/*if(Input::hasFile($request->path_prod)){
				$file = Input::file($request->path_prod);
				$file->move('images/'. $request->nombre_categ . '/' , $request->path_prod);
			} else {
				echo "no file";
			}*/

			break;
		default:
			# code...
			break;
	}

	//dump($request->all());
});

Route::get('php/php_info',function(){
	echo phpinfo();
});