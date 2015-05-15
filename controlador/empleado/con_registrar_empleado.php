<?php
require("../../modelo/mod_connex.php");
$conexion= new connex();
$pgconn= $conexion->conectar();

//se capturan los datos del formulario
$emp_ced= trim ($_POST ['cedula']);
$emp_nom= trim ($_POST ['nombre']);
$emp_ape= trim ($_POST  ['apellido']);
$emp_cor= trim ($_POST  ['correo']);
$emp_tel= trim ($_POST  ['telefono']);
$emp_log= trim ($_POST  ['login']);
$emp_cla= trim ($_POST  ['clave']);
$emp_conficlave= trim ($_POST  ['conficlave']);
$emp_fe= trim ($_POST  ['fechacreacion']);
$tipemp_cod= trim ($_POST  ['tipoempleado']);
$est_cod=1;
$dis_cod=1;
require("../../modelo/mod_empleado.php");
$empleado= new empleado();
//se valida la clave
if($emp_cla!=$emp_conficlave){
die("Las claves no coinciden");
}else{
$inserto=$empleado->agregar($emp_ced,$emp_nom,$emp_ape,$emp_cor,$emp_tel,$emp_log,$emp_cla,$emp_fe,$tipemp_cod,$est_cod,$dis_cod,$pgconn);
if ($inserto==true){
$consulta= $empleado->obtener($emp_ced,$pgconn);
if(pg_num_rows($consulta)>0){
$row=pg_fetch_row($empleado);
header("Location: ../../vista/empleado/vis_empleado_registrado.php");
}

}else{
header("Location: ../../vista/errordatos.php");
}
}
?>