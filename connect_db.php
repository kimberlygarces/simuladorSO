<?php

$servidor="localhost";
$nombre_bd="SimuladorProcesos";
$Usuario="root";
$contraseña="";


$conexion = mysqli_connect($servidor,$Usuario,$contraseña,$nombre_bd);

if(mysqli_connect_errno()){

	echo "FALLO CONEXIÓN";
	exit();
}

mysqli_set_charset($conexion, "utf8");
?>