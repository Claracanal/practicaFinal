<?php
  function abrirConexionBaseDatos(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cursosamsung";
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
  function mostrarDatos(){
    $conn = abrirConexionBaseDatos();

    $usuarios = "SELECT NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, EMAIL, LOGIN FROM usuarios";
    $res = $conn->query($usuarios);
    $rows = $res->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row) {
      echo "<tr>
              <td>" . $row['NOMBRE'] . "</td>
              <td>" . $row['PRIMER_APELLIDO'] . "</td>
              <td>" . $row['SEGUNDO_APELLIDO'] . "</td>
              <td>" . $row['EMAIL'] . " </td>
              <td>" . $row['LOGIN'] . "</td>
            </tr>";
    };
    echo "</tbody>";
    echo "</table>";
  }
 
  
?>
<!DOCTYPE html>
<html lang="es">
	<head charset="utf-8">
      <meta charset="UTF-8">
		  <title> Practica Final</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	</head>

	<body>
    <div class="container">
      <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
          <h2 class="mb-4 text-center"><em>Tabla de Usuarios registrados</em></h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="table-primary">
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Login</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php mostrarDatos(); ?>
            </tbody>
          </table>
          <a class="btn btn-primary" href="/practicaFinal/index.php">Ir al formulario</a>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>