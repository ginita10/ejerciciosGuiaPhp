<!DOCTYPE html>
<html>
<head>
	<title>Algoritmo 7</title>
</head>
<body>

<form method="GET">
	
	<h2>Ingrese el kilometraje de su Auto</h2>	
		<input type="number" name="numero" values="0">
		<br>
		<input type="submit">
</form>
<?php 

	if(!empty($_GET['numero'])){
		$kilom = $_GET['numero'];
		$resultado = $kilom * 16.4;
		$valor = number_format($resultado,0,".","");
		echo "<br>";
		echo "El auto consume en total: ".$valor;
	}
 ?>
</body>
</html>