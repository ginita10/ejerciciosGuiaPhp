<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>

<!-- 
	Una empresa que se dedica a la venta de desinfectantes necesita 
	un programa para gestionar las facturas. En cada factura figura: 
	el código del artículo, la cantidad vendida en litros y el precio por litro. 
	Se pide de 5 facturas introducidas: Facturación total, 
	cantidad en litros vendidos del artículo 1 y cuantas facturas se emitieron de más de 600 €.
-->

	<form action="Desarrollo_13.php" method="POST">
		Codigo Producto:<br><input type="text" name="codigo" id="codigo" value="0"><br/>
		Cantidad de Litros:<br><input type="text" name="litros" id="litros" value="0"><br/>
  		Precio Por Litros:<br><input type="text" name="precio" id="precio" value="0"><br/>
  		<input type="submit" value="Enviar">
	</form>
	<?php if(!empty($_GET['velocidad'])){
		echo  "La cantidad del recorrido es:".$_GET['velocidad'];		
	} ?>

</body>
</html>