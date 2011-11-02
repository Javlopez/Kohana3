<html>
<body>
<h2>Hola <?php echo $name ?></h2>

<?php foreach($usuarios as $usuario): ?>
	<p><?php echo $usuario->user; ?></p>
<?php endforeach; ?>
</body>
</html>