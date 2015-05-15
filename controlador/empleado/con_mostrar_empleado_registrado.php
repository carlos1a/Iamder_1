<?php
require("../../modelo/mod_connex.php");
$conexion = new Connex();
$pgconn= $conexion->conectar();

require("../../modelo/mod_empleado.php");
$consulta= new empleado();
$mostrar=$consulta-> mostrar ($pgconn);
   if(pg_num_rows($mostrar)>0){
?>

<style type="text/css">
<!--
.style1 {color: #000000}
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; }
-->
</style>


<table width=" " border="2" bgcolor="#dcdcdc" align="center" id="tablaregistro" >
<thead >
 <tr bgcolor="#000000" >
 <th align="center" bgcolor="#eeece1"><span class="style3">Nombre</span></th>
 <th align="center" bgcolor="#eeece1"><span class="style3">Apellido</span></th>
 <th align="center" bgcolor="#eeece1"><span class="style3">Cédula</span></th>
 <th align="center" bgcolor="#eeece1"><span class="style3">Usuario</span></th>
</tr>
</thead>
<?php
for($i=0; $i<pg_num_rows($mostrar); $i++){
$row= pg_fetch_array($mostrar,$i,PGSQL_ASSOC);
$emp_nom = $row["emp_nom"];
$emp_ape = $row["emp_ape"];
$emp_ced = $row["emp_ced"];
$emp_log = $row["emp_log"];
?>
<tr>
<td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_nom;?></span>
<td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_ape;?></span>
<td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_ced;?></span>
<td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_log;?>
    <?php }?>
</span>
</table>
<?php }?>