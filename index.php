<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de procesos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<header id=main_header>

		<div class="jumbotron" >
			<div class="container">
				<div><img align="left" src="img/Logo.png"  width="350" height="70"/><img align="right" src="img/carga.gif" width="70" height="70"/>
					<h3 align="right">SISTEMAS OPERATIVOS  </h3>
					<h5 align="right">SIMULADOR DE PROCESOS </h5></div>
				</div>
			</div>
		</header>
		
			<br>

				<div class="table-responsive">
		<form method="POST" action="">

			<table class="table table-bordered table-hover" width="100">

				<thead>

					<tr><th colspan = "3" scope = "colgroup">INGRESAR PROCESO</th></tr>
				</thead>

				<tfoot>

					<tr>
						<td><label>Nombre</label></td>
						<td><input type="name" size="60" name="Nombre"></td>
					</tr>

					<tr>
						<td><label>Caracteres</label></td>
						<td><input type="name" size="60" name="Caracteres"></td>
					</tr>
					<tr>



							<td colspan="2" align="center">
							<input type="submit" name="submit" value="Registrar"> <input type="reset" name="">

						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	</section>
	<br>

	<div id=btn1>
		<input  type="button" class="btnListar" value="LISTAR PROCESOS" onclick="location='index2.php'"/>
	</div>
	</div>
	<br>

<footer class="footer">
		<div class="container">
			<span class="text-muted"> 

				<div>
					<h6>.</h6>
					<img align="right" src="img/proceso.png" width="100" height="100"/>
					<h6 align="right"> Kimberly Gacés Pérez .</h6>
					<h6 align="right"> Laura de la Ossa Rivera  .</h6>
					<h6>Ing. Antonio Movilla</h6>
				</div>
        	

        </span>
      </div>
    </footer>


	<?php
	require("connect_db.php");

	$query = 'SELECT Pid, Nombre, Prioridad, caracteres FROM Proceso';

	$result=mysqli_query($conexion,$query);
	?>



	<?php 

							

	if(isset($_POST['submit'])){

		require("Registro.php");
		
	}
	?>



</body>
</html>
