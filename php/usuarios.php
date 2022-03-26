<?php

	$username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdverde";


	$nombre =$_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$pass = $_POST['password'];

	$md5pass = md5($pass);



	$con = new mysqli("$host", "$username", "$password", "$bd");

	if ($con->connect_error) {
		die("conexion fallida". $con->connect_error); 
	}


	$sql = "INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `pass`) 
    
	VALUES ('$nombre', '$apellido', '$correo', '$md5pass')";

	if (mysqli_query($con,$sql)){
		$mensaje = "datos guardados correctamente";
		$registro = true;
	}else {
		echo "Error al guardar datos: ".$sql. mysqli_error($con);
		$registro = false;
	}

	mysqli_close($con)

?>