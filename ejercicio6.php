<!DOCTYPE html>
<html>
<head>
	<title>Algoritmo 6</title>
</head>
<body>

<h2>Verificar Si Un Numero es Copicuo</h2>

<h4>Digite Un Numero Por Favor</h4>
<form method="GET" >	
<input type="number" name="numero" placeholder="Escriba el Numero" required>
<input type="submit">
</form>
</fieldset>
<?php 
	
	if(isset($_GET['numero'])){

		 $valor  = $_GET['numero'];
		 $voltiado = strrev($valor);
		 if($valor == $voltiado){
			echo "El numero ingresado es copicuo";

		 }else{
			echo "El numero ingresado NO es copicuo";
		 }
	}
 ?>

</body>
</html>