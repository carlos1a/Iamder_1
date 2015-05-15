<?php
//Requiero modelo conexión
require("../../../modelo/mod_connex.php");
	//Creo un objeto conexión
	$conexion = new Connex();
	//Instacio la función conectar
	$pgconn= $conexion->conectar();

//Requiero modelo atleta
require("../../../modelo/mod_atleta.php");
	//Creo un objeto atleta
	$consulta= new atleta();
	//Instancio la función listar
	$listar=$consulta-> listar ($pgconn);
		//Condiciono el número de filas
		if(pg_num_rows($listar)>0)
			{//Abro if 1
?>
<!-- Imprimo la tabla -->
<table border="1" align="center" id="lista_atletas" >
	<thead>
		<tr>
			<th align="center">Cédula</th>
			<th align="center">Nombre</th>
			<th align="center">Apellido</th>
			<th align="center">Disciplina</th>
		</tr>
	</thead>
<?php
	for($i=0; $i<pg_num_rows($listar); $i++)
		{//Abro for 1
			$row= pg_fetch_array($listar,$i,PGSQL_ASSOC);
			$atl_ced=$row["atl_ced"];
			$atl_nom=$row["atl_nom"];
			$atl_ape=$row["atl_ape"];
			$dis_des=$row["dis_des"]; 
?>
<!-- Imprimo los datos por cada fila obtenida -->
<tr>
	<td align="center"><?php echo $atl_ced;?>
	<td align="center"><?php echo $atl_nom;?>
	<td align="center"><?php echo $atl_ape;?>
	<td align="center"><?php echo $dis_des;?>
</tr>
<?php }//Cierro for 1?>
</table>
<?php }//Cierro if 1?>