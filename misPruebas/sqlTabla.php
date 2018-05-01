<?php
// Fecha: 30/04/2018
// Tema: Base de Datos
$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "mi_base";
$conexion = new mysqli($server,$usuario,$pass,$nombreBase);

?>
<!DOCTYPE html>
<html>
<head>
<style>
table { 
    display: table;
    border-collapse: collapse;
    border-color: gray;
	  margin: 0 auto;
	
}

	table, h3 {
		 font-family: Arial, Helvetica, sans-serif;
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
</style>
</head>
<body>
	<h3>
		Listado de nombres.
	</h3>
<table>
<thead>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
  </tr>
</thead>
  <tr>
    <td>miID</td>
    <td>MiNombre</td>
  </tr>
</table>	
</body>
</html>
