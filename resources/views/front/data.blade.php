<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Agregar</title>
		<style>
			form{
				background:#f5f5f5;
				padding:20px;
				border-radius:5px;
			}
		</style>
	</head>
	<body>
		<?php 
		$table = $_SESSION['pass'];
		$categorias = DB::table($table)->get();
		//echo json_encode($categorias);
		?>
		@switch($table)
		@case('item_categorias')
		<h1>Nuevo Producto</h1>
		<hr>
		<form action="{{ URL::to('api/item_categorias/save') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<table>
				<tr>
					<td>Categoria: </td>
					<td>
						<select type="text" name="categoria_prod">
							<?php $menuCategorias = DB::table('menu_categorias')->get(); ?>
							<option>------------------------</option>
							@foreach ($menuCategorias as $menuCateg)
								<option value="{{ $menuCateg->id_categoria }}">{{ $menuCateg->nombre_categoria }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre_prod"></td>
				</tr>
				<tr>
					<td>Descripción: </td>
					<td><input type="text" name="descripcion_prod"></td>
				</tr>
				<tr>
					<td>Precio: </td>
					<td><input type="text" name="precio_prod"></td>
				</tr>
				<tr>
					<!--<td>Path: </td>-->
					<td><label>File to upload</label></td>
					<td><input type="file" name="path_prod"></td>
				</tr>
				<input type="hidden" name="tabla" value="item_categorias">
				<tr>
					<td colspan="4"><hr><input type="submit" value="Agregar"></td>
				</tr>
			</table>
		</form>

		<h1>Seleccione un elemento para borrar.</h1>
		<hr>
		<form action="{{ URL::to('api/item_categorias/delete') }}" method="POST">
			{{ csrf_field() }}
			<table>
				<tr>
					<td>
						<select type="text" name="categoria_item_DELETE">
							<?php
								$delItemCategorias = DB::table('item_categorias')->get();
							?>
							@foreach ($delItemCategorias as $delItemCateg)
								<option value="{{ $delItemCateg->id }}">{{ $delItemCateg->item_name }}</option>
							@endforeach
						</select>
					</td>
					<input type="hidden" name="tabla" value="item_categorias">
					<td><input type="submit" value="Borrar"></td>
				</tr>
			</table>
		</form>
		@break

-------------------------------------------------------------------------------------------------------------------------

		@case('menu_categorias')
		<h1>Nueva Categoría</h1>
			<form action="{{ URL::to('api/menu_categorias/save') }}" method="POST">
			{{ csrf_field() }}
			<table>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre_menu"></td>
				</tr>
				<input type="hidden" name="tabla" value="menu_categorias">
				<tr>
					<td colspan="4"><hr><input type="submit" value="Agregar"></td>
				</tr>
			</table>
		</form>
		<h1>Seleccione un elemento para borrar.</h1>
		<hr>
		<form action="{{ URL::to('api/mwnu_categorias/delete') }}" method="POST">
			{{ csrf_field() }}
			<table>
				<tr>
					<td>
						<select type="text" name="categoria_menu_DELETE">
							<?php
								$delItemCategorias = DB::table('menu_categorias')->get();
							?>
							@foreach ($delItemCategorias as $delItemCateg)
								<option value="{{ $delItemCateg->id_categoria }}">{{ $delItemCateg->nombre_categoria }}</option>
							@endforeach
						</select>
					</td>
					<input type="hidden" name="tabla" value="menu_categorias">
					<td><input type="submit" value="Borrar"></td>
				</tr>
			</table>
		</form>
		@break
		@endswitch
	</body>
</html>