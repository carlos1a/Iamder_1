<?php
	$emp_ced = $_POST['cedula'];
	$emp_cla = md5 ($_POST['clave']);
   	$_SESSION['cedula'] = $emp_ced;
   	$_SESSION['clave']  = $emp_cla;

	require ('../../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

	require ('../../modelo/mod_empleado.php');
		$instanciar = new empleado();
		$columna = $instanciar->autenticar($emp_ced,$emp_cla,$pgconn);

	if(pg_num_rows ($columna)>0){
		session_start();
		$row = pg_fetch_array($columna,0,PGSQL_ASSOC);
		$_SESSION["cedula"]=$row["emp_ced"];
		$_SESSION["clave"]=$row["emp_cla"];
		header("Location: ../../vista/empleado/inicio.php");
	}
	else{
		$alerta = "Prueba del error";
		header("Location: ../../vista/error.php?alerta=$alerta");
	}
	if($mensaje!="") { echo $mensaje;}
?>