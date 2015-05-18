<?php
require("../../modelo/mod_connex.php");
$conexion = new Connex();
$pgconn= $conexion->conectar();

require("../../modelo/mod_empleado.php");
$consulta= new empleado();
$mostrar=$consulta-> mostrar ($pgconn);
   if(pg_num_rows($mostrar)>0){
?>

<?php
require("../css/css.php");

for($i=0; $i<pg_num_rows($mostrar); $i++){
$row= pg_fetch_array($mostrar,$i,PGSQL_ASSOC);

$emp_nom = $row["emp_nom"];
$emp_ape = $row["emp_ape"];
$emp_ced = $row["emp_ced"];
?>

<div class="container">

<div class="form-group">Nombre: <?php echo $emp_nom;?></div>
<div class="form-group">Apellido: <?php echo $emp_ape;?></div>
<div class="form-group">Cedula: <?php echo $emp_ced;?></div>

</div>
<?php }?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<?php }?>