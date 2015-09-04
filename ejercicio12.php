<!DOCTYPE html>
<html>
<head>
	<title>Algoritmo 12</title>
</head>
<body>

<form method="GET">
	<br>
	<h3>Por Favor Ingrese El Valor De La Laptop</h3>
	<input type="number" name="valor" values="0">
	<input type="submit">


</form>

<?php 
	if(!empty($_GET['valor'])){
		$total = 0;
		$valor = $_GET['valor'];
		$impuest = $valor;

		$impuest = ($impuest * 5) / 100;
		$valor += 330;

		$valor += $impuest;
		$total = $valor;
		echo "El valor total a pagar por la laptop es: ".$total;
	}
 ?>
</body>
</html>