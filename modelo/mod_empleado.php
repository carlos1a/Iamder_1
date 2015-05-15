<?php
class empleado{
	private $emp_ced;
	private $emp_nom;
	private $emp_ape;
	private $emp_cor;
	private $emp_tel;
	private $emp_log;
	private $emp_cla;
	private $emp_fe;
	private $tipemp_cod;
	private $est_cod;
	private $dis_cod;
	private $pgconn;

	public function agregar($emp_ced, $emp_nom, $emp_ape, $emp_cor, $emp_tel, $emp_log, $emp_cla, $emp_fe, $tipemp_cod, $est_cod, $dis_cod, $pgconn){

	$query = "INSERT INTO empleado (emp_ced, emp_nom, emp_ape, emp_cor, emp_tel, emp_log, emp_cla, emp_fe, tipemp_cod, est_cod, dis_cod)

	VALUES ('$emp_ced', '$emp_nom', '$emp_ape', '$emp_cor', '$emp_tel', '$emp_log', md5('$emp_cla'), '$emp_fe', '$tipemp_cod', '$est_cod', '$dis_cod')";

		$consulta= pg_query($pgconn,$query) or die ("ERROR AL INGRESAR DATOS: ".pg_last_error($consulta));

		return $consulta;

		}//function agragar


		public function autenticar($emp_log, $emp_cla, $pgconn){
			$query= "SELECT * FROM empleado WHERE emp_log='$emp_log' AND emp_cla='$emp_cla'	";
			$consulta= pg_query($pgconn, $query) or die ("CONSULTA ERRADA: ".pg_last_error($consulta));
			if($consulta){

				return $consulta;
				}//if autenticar
			}//function autenticar

	public function obtener($emp_ced, $pgconn){
		$query= "SELECT * FROM empleado WHERE emp_ced='$emp_ced'";
		$consulta= pg_query($pgconn,$query) or die ("CONSULTA ERRADA: ".pg_last_error($consulta));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener


		public function lista($pgconn){
		$query= "SELECT * FROM empleado";
		$consulta= mysqli_query($pgconn, $query) or die ("Consulta Errónea: ".pg_last_error($consulta));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function mostrar($pgconn){
		$query= "SELECT emp_nom, emp_ape , emp_ced, emp_log FROM empleado ORDER BY emp_cod DESC LIMIT 1";
		$consulta= pg_query($pgconn, $query) or die ("Consulta Errónea: ".pg_last_error($consulta));
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar
	}

?>
