<?php
require ("../../controlador/con_session.php");
require("../css/css.php");
$cedula = $_GET['emp_ced'];
?>
<!DOCTYPE HTML>
<html lang="es">
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

          <h2 align="center">Rellene el formulario para registrar sus datos en el sistema</h2>
        <form class="login" id="form" action="../../controlador/empleado/con_registrar_empleado.php" method="POST">

        <div class="form-group">
          Cédula:<input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cédula" readonly="true" value="<?php echo $cedula; ?>" title="Ingrese cédula del empleado" pattern="^[0-9]{6,8}$" required>
        </div>

        <div class="form-group">
          Nombre:<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" title="Ingrese nombre del empleado" required autofocus>
        </div>

        <div class="form-group">
          Apellido:<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" title="Ingrese apellido del empleado" required>
        </div>
      <div class="form-group">
          Correo:<input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@dominio.com" title="ejemplo@gmail.com" pattern="^[-\w.]+@{1}[-a-z0-9]+[.]{1}[a-z]{2,5}$" required>
        </div>

      <div class="form-group">
          Teléfono:<input type="text" class="form-control" name="telefono" id="telefono" placeholder="2127813002" title="Ingrese un número telefónico" pattern="^[0-9]{7,10}$" required>
        </div>

        <div class="form-group">
          Clave:<input type="password" class="form-control" name="clave" id="clave" placeholder="*******" title="Debe tener letras y números" pattern="^[a-zA-Z0-9]{4,10}$" required>
        </div>

        <div class="form-group">
          Confirma tu Clave:<input type="password" class="form-control" name="conficlave" id="conficlave" placeholder="*******" title="Debe tener letras y números" pattern="^[a-zA-Z0-9]{4,10}$" required>
        </div>

      <div class="form-group" >
            Seleccione cargo:<select class="form-control" name="tipoempleado" id="tipoempleado" required>
        <option  selected="selected" value="" >Selecione</option>
        <option value="1">Administrador</option>
        <option value="2">Empleado</option>
        <option value="3">Entrenador</option>
      </select>
      </div>

        <div class="form-group">
          Fecha de Registro:<input type="text" class="form-control"  name="fechacreacion" value="<?php echo date('Y-m-d'); ?>" readonly="true" required autofocus>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button> <button class="btn btn-lg btn-primary btn-block" type="reset">Borrar</button>

      </form>
</p>
        <!-- Menu -->
        <!--<?php
//require ("menu.php");
?>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>