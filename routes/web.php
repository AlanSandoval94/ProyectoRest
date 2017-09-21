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
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('front/home');
});

Route::get('home', function () {
    return view('front/home');
});

Route::get('categorias/{categ}', function ($categ) {
	//$_SESSION['pass'] = $categ;
    return view('front/categorias');
});

Route::get('conocenos', function () {
    return view('front/conocenos');
});

Route::get('historia', function(){
	return view('front/historia');
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
			if(Input::hasFile('path_prod')){
				$menu = DB::table('menu_categorias')->where('id_categoria', '=', $request->categoria_prod)->pluck('nombre_categoria');
				$json = json_encode($menu);
				$json = str_replace('[', '', $json);
				$json = str_replace('"', '', $json);
				$json = str_replace(']', '', $json);
				$json = str_replace(' ', '_', $json);
				$file = Input::file('path_prod');
			$data = ['menu_id'=>$request->categoria_prod, 'item_name'=>$request->nombre_prod,'descripcion'=>$request->descripcion_prod,'precio'=>$request->precio_prod,'path'=>('images/'. $json . "/" . $file->getClientOriginalName())];
			DB::table('item_categorias')->insert($data);
			//$request->path_prod->move(base_path().'/public/images'.$request->nombre_categ.'/', $request->path_prod);

			//request()->file('path_prod')->store($request->nombre_categ,'public');

				$file->move('images/'. $json . '/' , $file->getClientOriginalName());
			} else {
				echo "no file";
			}

			break;
		case 'menu_categorias':
				$data = ['nombre_categoria'=>$request->nombre_menu];
				DB::table('menu_categorias')->insert($data);
				//return Storage::makeDirectory('public/'.$request->nombre_menu);
				$crear = mkdir ('images/'.$request->nombre_menu, 0777);
				if($crear){
					echo "Directorio creado";
				} else {
					echo "Directorio NO creado";
				}
			break;
		default:
			# code...
			echo "NADA :v";
			break;
	}

	//dump($request->all());
});

Route::post('api/{table}/delete', function(Request $request){
	$tabla = $request->tabla;
	switch ($tabla) {
		case 'item_categorias':
				$borrar = DB::table('item_categorias')->where('id','=', $request->categoria_item_DELETE)->delete();
				if($borrar){
					echo "Item borrado.";
				} else {
					echo "No se borró";
				}
			break;
		case 'menu_categorias':
				$borrar = DB::table('menu_categorias')->where('id_categoria','=', $request->categoria_menu_DELETE)->delete();
				if($borrar){
					echo "Menu borrado.";
				} else {
					echo "No se borró";
				}
			break;
		default:
			# code...
			echo "NADA :v";
			break;
	}
});

Route::get('php/php_info',function(){
	echo phpinfo();
});