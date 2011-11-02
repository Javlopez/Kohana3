<html>

<head>
</head>
<body>
<p>listado de productos</p>

<?php foreach($productos as $producto):?>
	<p><?php echo $producto->Producto;  ?></p>
<?php endforeach; ?>
<br />
<p><a href="<?php echo URL::base(); ?>catalogo/add" >Agregar producto</a></p>
</body>
</html>