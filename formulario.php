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
  function comprobarCampos($nombre,$apellido,$segundo_apellido,$email,$login,$password){

    if (empty($nombre)){
      return "Se debe rellenar el campo nombre";
    }
    if (empty($apellido)){
      return "Se debe rellenar el campo primer apellido";
    }
    if (empty($segundo_apellido)){
      return "Se debe rellenar el campo segundo apellido";
    }
    if (empty($email)){
      return "Se debe rellenar el campo email";
    }
    if (empty($login)){
      return "Se debe rellenar el campo login";
    }
    if (empty($password)){
      return "Se debe rellenar el campo contraseña";
    }
    if (strlen($password)<4 || strlen($password)>8){
      return "Número de caracteres inválido en la contraseña. Tiene que tener entre 4 y 8 caracteres";
    }
    $emailRegEx = "/[A-Za-z0-9]+@[A-Za-z0-9]+(\.[A-Za-z]+)+/";
    if (!preg_match($emailRegEx, $email)){
      return "Formato de Email Incorrecto";
    }

  }
  $conn = abrirConexionBaseDatos();
  if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $segundo_apellido = $_POST['segundo-apellido'];
    $email = $_POST['email'];          
    $login = $_POST['login'];
    $password = $_POST['password'];
    $getUserList = $_POST['getUserList'];
    $error = comprobarCampos($nombre,$apellido,$segundo_apellido,$email,$login,$password);
    if (empty($error)){
      $sql_check_email_unique = "SELECT * FROM usuarios WHERE email LIKE '$email'";
      $res = $conn->query($sql_check_email_unique);
      if ($res->num_rows === 0){
        $sql_insert = "INSERT INTO usuarios (nombre, primer_apellido, segundo_apellido, email, login, password)
                       VALUES ('$nombre','$apellido','$segundo_apellido','$email','$login', '$password')";
  
        if ($conn->query($sql_insert) === TRUE) {
          echo '<script>
                  alert("Registro completado con éxito.");
                  window.location = "/practicaFinal/index.php";
                </script>';
        } else {
          echo '<script>
                  alert("ERROR: "' . $sql_insert . "<br>" . $conn->error .'");
                  window.location = "/practicaFinal/index.php";
                </script>';
        }
      }else {
        echo '<script>
                  alert("Este email ya existe:'. $email. '");
                  window.location = "/practicaFinal/index.php";
              </script>';
      }
  
      $conn->close();
    }else{
      echo '<script>
                alert("' . $error . '");
                window.location = "/practicaFinal/index.php";
            </script>';
    }
  }
?>