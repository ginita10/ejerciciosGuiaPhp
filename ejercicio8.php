<!DOCTYPE html>
<html>
<head>
	<title>Algoritmo 8</title>
</head>
<body>

		<h4>Ingrese Por Favor el Numero de Milla a Convertir</h4>
		<br>
		<form method="GET">
			<input type="number" name="numero" values="0">
			<br>
			<input type="Submit">
		</form>
<?php  

	if(!empty($_GET['numero'])){

		$milla = $_GET['numero'];

		echo "Una Milla en Kilometro equivale: ".$milla / 0.6214;
	    echo " Yardas equivale a: ".$milla / 1760;
		echo " pies equivale a: ".$milla *3;
		echo " pulgadas equivale a: ".$milla * 36;
	}

?>


</body>
</html>