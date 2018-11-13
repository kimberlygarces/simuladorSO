<!DOCTYPE html>
<html>
<head>
	<title>simulador de procesos</title>
	<link href="css/estilo.css" type="text/css" rel="stylesheet"/> 
	<link rel="stylesheet" href="img/url">
</head>

<body background="img/fondo.jpeg">


		<video src="img/fondo.mp4" autoplay loop muted poster="img/fondo.jpeg">
		</video>

	<br>
	<header>
		
		<div id="listar" class="listar"> 
			<h1>Lista de procesos</h1>
		</div>

	</header>
	
	<br>

	<?php
	require("connect_db.php");

	$query = 'SELECT Pid, Nombre, Prioridad, caracteres FROM Proceso';

	$result=mysqli_query($conexion,$query);
	?>

	<table class="Mostrar" border = "3" cellpadding = "10" cellspacing = "10">
		<thead>
			<tr>
				<th colspan = "1" scope = "colgroup">PID</th>
				<th colspan = "1" scope = "colgroup">NOMBRE</th>
				<th colspan = "1" scope = "colgroup">PRIORIDAD</th>
				<th colspan = "1" scope = "colgroup">CARACTERES</th>
			</tr>
		</thead>

		<?php while ($mostrar = mysqli_fetch_array($result)){
			?>
			<tr>
				<th><?php echo $mostrar['Pid']?></th>
				<th><?php echo $mostrar['Nombre']?></th>
				<th><?php echo $mostrar['Prioridad']?></th>
				<th><?php echo $mostrar['caracteres']?></th>
			</tr>

			<?php
		}
		?>
	</table>


	<br>
	<div id=btn2>
		<input type="button" class="btnNuevoP" value="NUEVO PROCESO" onclick="location='index.php'"/>
	</div>

	<?php 

	if(isset($_POST['submit'])){

		require("Registro.php");

	}
	?>



</body>
</html>