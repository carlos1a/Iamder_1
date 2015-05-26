<?php
	$emp_ced = $_POST['cedula'];
	$emp_cla = md5($_POST['clave']);
   	$_SESSION['emp_ced'] = $emp_ced;
   	$_SESSION['emp_cla']  = $emp_cla;

	require ('../../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

	require ('../../modelo/mod_empleado.php');
		$instanciar = new empleado();
		$columna = $instanciar->autenticar($emp_ced,$emp_cla,$pgconn);

	if(pg_num_rows ($columna)>0){
		session_start();
		$row = pg_fetch_array($columna,0,PGSQL_ASSOC);
		$_SESSION["emp_ced"]=$row["emp_ced"];
		$_SESSION["tipemp_cod"]=$row["tipemp_cod"];
		$_SESSION["emp_cla"]=$row["emp_cla"];
		$_SESSION["emp_nom"]=$row["emp_nom"];
		$_SESSION["emp_ape"]=$row["emp_ape"];
		$_SESSION["emp_cod"]=$row["emp_cod"];
		header("Location: ../../vista/empleado/inicio.php");
	}
	else{
		$alerta = "Problemas al iniciar sesión";
		header("Location: ../../vista/error.php?alerta=$alerta");
	}
	if($mensaje!="") { echo $mensaje;}
?>