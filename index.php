<!DOCTYPE html>
<html>


	<title>simulador de procesos</title>
	<link href="css/estilo.css" type="text/css" rel="stylesheet"/> 
	<link rel="stylesheet" href="img/url">



	<body background="img/fondo.jpeg">

		<video src="img/fondo.mp4" autoplay loop muted poster="img/fondo.jpeg">
		</video>


		<header id=main_header>

			<div class="main" id="main">
			<h1><img src="img/proceso.png" width="100" height="100" align="middle"> <i>SIMULADOR DE PROCESOS</i></h1></div>

		</header>
		
			<br>


		<form method="POST" action="">

			<table class="Proceso"  border = "10" cellpadding = "15" cellspacing = "10">

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

	</section>
	<br>

	<div id=btn1>
		<input  type="button" class="btnListar" value="LISTAR PROCESOS" onclick="location='index2.php'"/>
	</div>



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