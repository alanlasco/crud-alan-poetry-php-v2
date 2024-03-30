<?php
    require 'login-checker.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="inputs.css">
    <title>Agregar</title>
</head>
<body>
    <?php
    require 'navbar.php';
    ?>
      <h1 class='titulo'>Agregar Elemento</h1>
  <form class='formulario' action="add-poem-process.php" method="post">
  <div class="input-wrapper"> 
  <label for="nombre">Nombre poema:</label>
    <br>
    <input class="input" type="text" id="nombre" name="nombre" required>
    <br>
    </div>
    <div>
    <label for="poema">poema:</label>
    <br>
    <textarea name="poema" id="poema" cols="30" rows="10" required>
    </textarea>
    </div>
    <br>
    <div class="input-wrapper">
    <label for="favorita">Es un poema favorito? 1=Si 2=No  </label>
    <input class="input" type="number" name="favorita" id="favorita" required>
    </div>
    <br>
    <div>
    <input type="submit" value="Agregar">
    </div>
  </form>
    
</body>
</html>