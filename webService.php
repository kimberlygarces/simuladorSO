<?php
require("connect_db.php");

$query = 'SELECT Pid, Nombre, Prioridad, caracteres FROM Proceso';

$result=mysqli_query($conexion,$query);

$respuesta = array();

$cont = 0;



    if(!$result = mysqli_query($conexion, $query)) die(); //si la conexión cancelar programa

    $rawdata = array();


    while( $registro = mysqli_fetch_array($result) ){

    	
    	$respuesta[$cont] = $registro;
    	$cont++;
    }

    echo json_encode($respuesta);

 //while ($mostrar = mysqli_fetch_array($result)){
    ?>

