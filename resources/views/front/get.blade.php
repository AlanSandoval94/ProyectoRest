<!DOCTYPE html>
<html>
	<head>
		<title>Consulta</title>
	</head>
	<body>
		<?php
        $elementos = DB::table('itemcategoria')->join('menucategoria','menucategoria.id_categoria','=','itemcategoria.menu_id')->get();
        ?>
        <h1>Lista de comidas</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Platillo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Salsa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($elementos as $elemen)
                    <tr>
                        <td>{{ $elemen->nombre_categoria }}</td>
                        <td>{{ $elemen->item_name }}</td>
                        <td>{{ $elemen->descripcion }}</td>
                        <td>{{ $elemen->precio }}</td>
                        <td><img src="{{ $elemen->path }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
	</body>
</html>