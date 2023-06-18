<!DOCTYPE html>
<?php
  include "formulario.php";
  $usuariosBD = "SELECT * FROM usuarios";
  $res = $conn->query($usuariosBD);  
  $hide = $res->num_rows === 0 ? 'hide' : '';
?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario</title>
  <script src="main.js"></script>
  <link rel="stylesheet" href="formulario.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
      <div class="col-md-6">
        <form method="POST" action="formulario.php">
          <h2 class="mb-4 text-center"><em>Formulario de Registro</em></h2>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre <span class="text-danger"><em>(requerido)</em></span></label>
            <input type="text" name="nombre" class="form-control" required maxlength="50"/>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Primer Apellido <span class="text-danger"><em>(requerido)</em></span></label>
            <input type="text" name="apellido" class="form-control" required maxlength="50"/>
          </div>
          <div class="mb-3">
            <label for="segundo-apellido" class="form-label">Segundo Apellido <span class="text-danger"><em>(requerido)</em></span></label>
            <input type="text" name="segundo-apellido" class="form-control" required maxlength="50"/>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger"><em>(requerido)</em></span></label>
            <input type="email" name="email" class="form-control" required maxlength="150"/>
          </div>
          <div class="mb-3">
            <label for="login" class="form-label">LogIn <span class="text-danger"><em>(requerido)</em></span></label>
            <input type="text" name="login" class="form-control" required maxlength="50"/>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password <span class="text-danger"><em>(requerido)</em></span></label>
            <input type="password" name="password" class="form-control" required maxlength="8" minlength="4"/>
          </div>
          <div class="mb-3">
            <input class="btn btn-primary" name="submit" type="submit" value="Registrarse"/>
            <a class="btn btn-primary <?php echo $hide ?>" name="getUserList" href="/practicaFinal/usuarios.php">Consultar Usuarios</a>
          </div>          
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
