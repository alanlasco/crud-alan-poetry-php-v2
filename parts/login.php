<?php
session_start();

require '../config/config.php';

$usuario = "";
$pass = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['user'])) {
        $usuario = $_POST['user'];
    } else {
        $error .= "Debe introducir el nombre<br>";
    }

    if (!empty($_POST['password'])) {
        $pass = $_POST['password'];
    } else {
        $error .= "Debe introducir la contraseña<br>";
    }

    if (empty($error)) {
        $sql = "SELECT id, username, password FROM usuarios WHERE username=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $respuesta = $resultado->fetch_assoc();

            // Comparación de contraseñas en texto plano
            if ($pass === $respuesta['password']) {
                $_SESSION = [
                    'id' => $respuesta['id'],
                    'user' => $usuario,
                ];
                header('Location: ./index.php');
                exit();
            } else {
                $error .= "No coinciden los datos ingresados";
            }
        } else {
            $error .= "El usuario ingresado no existe";
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/login.css">
    <title>Log in</title>
</head>
<body>

    <div class="login">
  <div class="login-card">
  <div class="card-header">
    <div class="log">Login</div>
  </div>
  <form method="post">
    <div class="form-group">
      <label for="user">Username:</label>
      <input required="" name="user" id="username" type="text">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input required="" name="password" id="password" type="password">
    </div>
    <div class="form-group">
      <input value="Login" type="submit">
    </div>
            <?php
        if (!empty($error)) {
            echo $error;
        }
        ?>
  </form>
</div>
</div>
    
</body>
</html>