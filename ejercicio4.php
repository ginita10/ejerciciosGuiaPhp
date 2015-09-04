<!DOCTYPE html>
<html>
<head>
	<title>Algoritmo 4</title>
</head>
<body>
<form method="GET">
<label align="center">Digite un Numero Por Favor</label>
<br>
<input type="number" name="numero" value="0">
<input type="submit">


</form>
<?php 
	if(!empty($_GET['numero'])){
		$valor = $_GET['numero'];
		if(($valor < 9999) && ($valor > 0)){
		echo "<br>";
		echo "El numero con sus cifras al reves es: ".strrev($valor);
		}else{

			echo "'El numero ingresado debe ser menor 9999 y mayor que 0";
		}
		
	 }
?>
</body>
</html>