<!DOCTYPE html>
<html>
<head>
	<title>Algoritmo 9</title>
</head>
<body>

<form method="GET">
	<br>
	<h3>Digite El Valor de la Laptop</h3>
	<br>
	<input type="number" name="precio" value="0">
	<br>
	<input type="submit">


</form>

<?php 
	
	if(!empty($_GET['precio'])){
		$total = 0;
		$valor = $_GET['precio'];
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