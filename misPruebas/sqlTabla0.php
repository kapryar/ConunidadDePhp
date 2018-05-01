<?php
// Fecha: 30/04/2018
// Tema: Base de Datos
$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "mi_base";
$conexion = new mysqli($server,$usuario,$pass,$nombreBase);

if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT id, nombre FROM mi_tabla;";


?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
<link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
<style>
table { 
    display: table;
    border-collapse: collapse;
    border-color: gray;
	  margin: 0 auto;
	
}

	table, h2 {
		 font-family: Arial, Helvetica, sans-serif;
	}	
h2 {
    text-align: center;
}
	table, th, td {
    border: 1px solid gray;
		padding: 10px;
}
	
tr:nth-child(odd) {
    background-color:#f2f2f2;
}
tr:nth-child(even) {
    background-color:#fbfbfb;
}
	thead {
		color:CornflowerBlue;
	}
	
	thead th{
		background-color: white;		
	}
	.colNombre {
	width: 250px; /* ancho de la Celda nombre*/
}
table tr:hover {
  background-color: LightSteelBlue;
  cursor: pointer;
}
tbody > tr > th {
  background-color: CornflowerBlue;
	color: white;
  font-weight: bold;
}
</style>
</head>
<body>
	<h2>
		Listado de nombres.
	</h2>
<table>
	
<?php
	
	if ($resultado = mysqli_query($conexion, $consulta)):

		?>
	
<thead>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
  </tr>
</thead>
	<?php
	    /* obtener array asociativo */
    while ($row = mysqli_fetch_assoc($resultado)):	
	?>
	
  <tr>
    <td><?php echo str_pad($row["id"],3, "0", STR_PAD_LEFT); ?></td>
    <td class ="colNombre"><?php echo $row["nombre"] ?></td>
  </tr>
	<?php
		    endwhile;
	?>
	<tbody>
	  <tr>
    <th colspan="2">Hay <?php echo $resultado->num_rows; ?> nombre<?php echo ($resultado->num_rows>1)?"s":""; ?>.</th>
  </tr>
	</tbody>		
</table>	
	
	<?php
		endif;
	?>
</body>
</html>

<?php
/* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
/* cerrar la conexión */
		mysqli_close($conexion);
