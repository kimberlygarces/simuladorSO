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
				<div align="right">
					<img align="left" src="img/Logo.png"  width="350" height="70"/>
					<img align="right" src="img/carga.gif" width="70" height="70"/>
					<h3>SISTEMAS OPERATIVOS  </h3>
					<h5>SIMULADOR DE PROCESOS </h5></div>
				</div>
			</div>
		</header>



	<br>
	<header>
		
		<div id="listar" class="listar"> 
			<h1>Lista de procesos</h1>
		</div>

	</header>

	<?php
	require("connect_db.php");

	$query = 'SELECT Pid, Nombre, Prioridad, caracteres FROM Proceso';

	$result=mysqli_query($conexion,$query);
	?>
	
	<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="info">
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
	</div>
	
	<div id=btn2>
		<input type="button" class="btnNuevoP" value="NUEVO PROCESO" onclick="location='index.php'"/>
	</div>
	<br>

	<footer class="footer">
		<div class="container">
			<span class="text-muted"> 
				<div align="right">
					<h6>.</h6>
					<img align="right" src="img/proceso.png" width="100" height="100"/>
					<h6> Kimberly Gacés Pérez .</h6>
					<h6> Laura de la Ossa Rivera  .</h6>
				</div>
        	

        </span>
      </div>
    </footer>


	<?php 

	if(isset($_POST['submit'])){

		require("Registro.php");

	}
	?>



</body>
</html>