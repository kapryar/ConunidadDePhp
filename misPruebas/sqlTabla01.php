<?php
// Fecha: 30/04/2018
// Tema: Base de Datos
$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "mi_base";

/*

$conexion = new mysqli($server,$usuario,$pass,$nombreBase);

if ($conexion->connect_error) {
     die('Hubo un problema con la conexión con la base de datos.');
}
*/

mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $conexion = new mysqli($server,$usuario,$pass,$nombreBase);
} catch (Exception $e ) {
     die( "Hubo un problema con la conexión con la base de datos.");
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
	  margin: 0 auto;
		width: 450px;
}

	table, h2 {
		 font-family: Arial, Helvetica, sans-serif;
	}	
h2 {
  text-align: center;
	color: RoyalBlue;
	text-decoration: underline;
}
	table, th, td {
    border: 1px solid RoyalBlue;
		padding: 10px;
}
	
tr:nth-child(odd) {
    background-color:#f2f2f2;
}
tr:nth-child(even) {
    background-color:#fbfbfb;
}
	thead th{
  	background-color: CornflowerBlue;
		color: white;	
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
.colNombre {
	width: 250px; /* ancho de la Celda nombre*/
}
.colId {
	width: 30px; /* ancho de la Celda nombre*/
}

	
.sombra {
	-webkit-box-shadow: 8px 9px 18px 1px rgba(12,74,107,1);
	-moz-box-shadow: 8px 9px 18px 1px rgba(12,74,107,1);
	box-shadow: 8px 9px 18px 1px rgba(12,74,107,1);
	}
</style>
</head>
<body>
	<h2>
		Listado de nombres.
	</h2>
<table class="sombra">
	
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
    <td class="colId"><?php echo str_pad($row["id"],3, "0", STR_PAD_LEFT); ?></td>
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
