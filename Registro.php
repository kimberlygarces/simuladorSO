<?php
	
		require("connect_db.php");

	$Nombre = $_POST['Nombre'];
	$Prioridad = rand(0,2);
	$Caracteres =$_POST['Caracteres'];
	

	

	$requerido = strlen($Nombre)*strlen($Caracteres);

	$cons = "SELECT MAX(tl) from Proceso";
	$res=mysqli_query($conexion, $cons);
	
		


	if($Nombre=="" || $Caracteres=="" || $Nombre == $Nombre){

	 echo "No registrado";
	}else{

		$consulta=("INSERT INTO Proceso (Pid,Nombre,Prioridad,Caracteres) VALUES('','$Nombre',$Prioridad,'$Caracteres')");

		$resultado=mysqli_query($conexion,$consulta);

		if($resultado==false){

		echo "Error";

		}else{
			echo "OK";
		}
		mysqli_close($conexion);
	}
?>