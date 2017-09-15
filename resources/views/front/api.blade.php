<!DOCTYPE html>
<html>
	<head>
		<title>API</title>
	</head>
	<body>
		<h1 align="center">Página en construcción xD</h1>

		<?php
			$tables = DB::select('SHOW TABLES');
			foreach($tables as $table)
			{
      			echo $table->Tables_in_proyectorestaurante . "<br>";
			}
		?>

		<a href="{{ URL::to('api/menu_categorias') }}">Menú Categorías</a>
		<br>
		<a href="{{ URL::to('api/item_categorias') }}">Item Categorías</a>
	</body>
</html>