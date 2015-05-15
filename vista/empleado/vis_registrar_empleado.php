<?php
//require ("../session.php");
?>
<!DOCTYPE HTML>
<html lang=es>
  <head>

    <title>Empleados</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
                  <header>
                    <h2>Registro de empleados</h2>
                  </header>
                  <div >

                    <span><span>Empleado</span>
                    <ul >

                    </ul>
                  </div>
                  <form id="form1" name="form1" method="post" action="../../controlador/empleado/con_registrar_empleado.php">
                  <div class="form-group">
    <h2>Rellene el formulario para registrar sus datos en el sistema</h2>


    <label for="number">Cédula</label>
    <td width="298" scope="col"><div align="right"><strong>C&eacute;dula:&nbsp;</strong></div></td>
    <td width="466" scope="col"><input type="text" name="cedula" id="cedula" placeholder="Cédula"/></td>
    <th width="385" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="41" scope="col">&nbsp;</th>
    <td width="298" scope="col"><div align="right"><strong>Nombre:&nbsp;</strong></div></td>
    <td width="466" scope="col"><input type="text" name="nombre" id="nombre" placeholder="Nombre"/></td>
    <th width="385" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Apellido:&nbsp;</strong></div></td>
    <td><input type="text" name="apellido" id="apellido" placeholder="Apellido"/></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Correo:&nbsp;</strong></div></td>
    <td><input type="text" name="correo" id="correo" placeholder="ejemplo@dominio.com"/></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Tel&eacute;fono:&nbsp;</strong></div></td>
    <td><input type="text" name="telefono" id="telefono" placeholder="2127813002"/></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Login:&nbsp;</strong></div></td>
    <td><input type="text" name="login" id="login" placeholder="Usuario De Red"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Clave:&nbsp;</strong></div></td>
    <td><input type="password" name="clave" id="clave" placeholder="*******"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Confirme su clave:&nbsp;</strong></div></td>
    <td><input type="password" name="conficlave" id="conficlave" placeholder="*******"/></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Fecha de registro:&nbsp;</strong></div></td>
    <td><input type="date" name="fechacreacion" id="fechacreacion"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Perfil:&nbsp;</strong></div></td>
    <td><select name="tipoempleado" id="tipoempleado" required>
      <option value="">Seleccione</option>
      <option value="1">Administrador</option>
      <option value="2">Empleado</option>
      <option value="3">Entrenador</option>

     </select></td>
  </tr>
  <tr>
 <tr>
  <td colspan="4" align="center">&nbsp;</td>
 </tr>
    <td colspan="4" align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" />
      <!--<input type="reset" name="borrar" id="borrar" value="Borrar" /></td>--> </td>
    </tr>
</table>
    <p>&nbsp;</p>
    </div>
</form></p>
        <!-- Menu -->
        <!--<?php
//require ("menu.php");
?>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>