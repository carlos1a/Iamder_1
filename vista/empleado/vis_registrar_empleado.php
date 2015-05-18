<?php
//require ("../session.php");
require("../css/css.php");

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
          Cédula:<input type="text" class="form-control" placeholder="Ingresa tu Cédula" name="cedula" required>
        </div>

        <div class="form-group">
          Nombre:<input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="nombre" required autofocus>
        </div>

        <div class="form-group">
          Apellido:<input type="text" class="form-control" placeholder="Ingresa tu Apellido" name="apellido" required autofocus>
        </div>
      <div class="form-group">
          Correo:<input type="email" class="form-control" placeholder="Ingresa tu Correo" name="correo" required autofocus>
        </div>

      <div class="form-group">
          Teléfono:<input type="text" class="form-control" placeholder="Ingresa tu Teléfono" name="telefono" required autofocus>
        </div>

      <div class="form-group" >
            Seleccione Cargo:<select class="form-control" name="tipo_empe" id="tipo_empe" >
        <option  selected="selected" value="0">Selecione</option>
        <option value="1">Administrador</option>
        <option value="2">Empleado</option>
        <option value="3">Entrenador</option>
      </select>
      </div>

        <div class="form-group">
          Clave:<input type="password" class="form-control" placeholder="Ingresa tu Clave" name="clave" required autofocus>
        </div>

        <div class="form-group">
          Confirma tu Clave:<input type="password" class="form-control" placeholder="Confirma tu Clave" name="conficlave" required autofocus>
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