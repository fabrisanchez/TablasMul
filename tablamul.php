<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  	 <link rel="stylesheet" href="style.css">
</head>
<body>
<center>

 
<h2>TABLAS DE MULTIPLICAR</h2>
   

<div class="container mt-3">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"> 
		<div class="mb-3 mt-3"> 
		<label>Ingrese el numero que desea multiplicar: </label>
		<input type="int" name="numero" class="form-control" placeholder="Digite un numero:" required>
		</div>
		<input type="submit" name="Enviar" value="Calcular" class="btn btn-primary">
	</form>
</div>
<div class="container mt-3">
	<form method='GET' >
		<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Multiplicacion</th>
				      <th scope="col">Resultado</th>
				    </tr>
				  </thead>
				  <tbody>
			<?php 
			

			if(isset($_GET['numero']))
			{

			   $numero = $_GET['numero'];
			
			   for( $i=1; $i<=20; $i++)
			   {
			    echo "<tr>";
			    echo '<th scope=row>'.$i.'</th>';
			    echo '<td>'.$numero.' * '.$i.'</td>';
			    echo '<td>'.$numero*$i.'</td>';
			    echo "</tr>";
		            }
		        }
		?>
		</tbody>
		</table>
		</form>
</div>
</center>
</body>
</html>
