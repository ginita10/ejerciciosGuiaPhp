<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>

<label >Ingrese los Datos de los Estudiantes</label>
<br>
<form method="GET">
	
	<label>Ingrese los datos del Primer Estudiante </label>	
	<br>
	<input type="number" name="edad1" placeholder="Enter your age">
	<br>	
	<input type="number" name="altura1" placeholder="Enter your height">	

	<br>
		
	<label>Ingrese los datos del segundo estudiante</label>
	<br>
	<input type="number" name="edad2" placeholder="Enter your age">
	<br>
	<input type="number" name="altura2" placeholder="Enter your height">


	<br>
	
	<label>Ingrese los datos del tercer estudiante</label>
	<br>
	<input type="number" name="edad3" placeholder="Enter your age">
	<br>
	<input type="number" name="altura3" placeholder="Enter your height">


	<br>
	
	<label>Ingrese los datos del cuarto estudiante</label>
	<br>
	<input type="number" name="edad4" placeholder="Enter your age">
	<br>
	<input type="number" name="altura4" placeholder="Enter your height">


	
	<br>
	<label>Ingrese los datos del quinto estudiante</label>
	<br>
	<input type="number" name="edad5" placeholder="Enter your age">
	<br>
	<input type="number" name="altura5" placeholder="Enter your height">
	<br>
	<input type="submit" >

</form>

<?php

	if(!empty($_GET['edad1'])){
		$edad1 = $_GET['edad1'];
		$altura1 =  $_GET['altura1'];


		$edad2 = $_GET['edad2'];
		$altura2 = $_GET['altura2'];

		$edad3 = $_GET['edad3'];
		$altura3 = $_GET['altura3'];


		$edad4 = $_GET['edad4'];
		$altura4 = $_GET['altura4'];

		$edad5 = $_GET['edad5'];		
		$altura5 = $_GET['altura5'];




			$altura = $edad1 + $edad2 + $edad3 + $edad4 + $edad5;

			$suma = $altura1 + $altura2 + $altura3 + $altura4 + $altura5;

	
		$mediaEdad = $suma / 5;

		echo "La media de las edades de los alumnos es: ".$mediaEdad;
		echo "<br>";
		$mediaAlturas = $altura / 5;
		echo "<br>";
		echo "La media de las alturas de los alumnos es: ".$mediaAlturas;

		$alturas = array($altura1, $altura2, $altura3, $altura4, $altura5);
		$edad = array($edad1, $edad2, $edad3, $edad4, $edad5);


		$alt = 0;

		foreach ($alturas as $item) {
			
			if($item > 175){
				@$alt += 1;
			}
		}

		$eda = 0;
		foreach ($edad as $item) {
			if($item > 18){
				$eda += 1;

			}
		}
		echo "<br>";
		echo "<br>";
		echo "El numero de alumnos que superan el 175 cm de alturas es: ";
		echo $alt;

		echo "<br>";
		echo "El numero de alumnos que ssuperan los 18 años es: ".$eda;
		
	}


?>

</body>
</html>