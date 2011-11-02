<html>

<head>
</head>
<body>
<p>Agregar Producto</p>
<form action="<?php echo URL::base() ?>catalogo/add" method="post"/>
	<p>
		<label>Nombre del Producto</label>
		<input type="text" name="nombre" value="">
	</p>
	<p>
		<input type="submit" value="Agregar este producto"/>
	</p>
</form>
</body>
</html>