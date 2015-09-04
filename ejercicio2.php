<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<!-- A02: Calcular cuanta distancia en kilómetros recorre la velocidad de la luz en el espacio en 800 días. -->
	<!-- Velocidad de la luz 299792458 m/s; -->
	<!-- Kilometros por hora 8.765.812 * 24 -->
	<!-- Kilometros por dia 210379488 -->
	<!-- Total 210379488 * 800 -->
	<form  method="POST">
		 Cantidad de Dias:<br>
  		<input type="text" name="dias" id="dias" value="0">
  		<input type="submit" value="Enviar">
	</form>
	

<?php 

if(!empty($_POST['dias'])){
		$nDias = $_POST['dias'];
		$kmPorDia = 8765812 * 24;
		$total = $nDias * $kmPorDia;
		echo  "La cantidad del recorrido es: ".$total;
		
	}


 ?>


</body>
</html>