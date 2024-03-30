<?php
    require 'login-checker.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/add-poem.css">
    <link rel="stylesheet" href="inputs.css">
    <title>Agregar</title>
</head>
<body>
    <?php
    require 'navbar.php';
    ?>
      <h1 class='heading'>Agregar Poema</h1>
  <form class="form-container" action="add-poem-process.php" method="post">


  <div class="inputs"> 
    <div>
  <label class="label-inline" for="nombre">Nombre poema:</label>
    <input class="input" type="text" id="nombre" name="nombre" required>
    </div>
    <div>
    <label for="favorita">Es un poema favorito? 1=Si 2=No  </label>
    <input class="input-number" type="number" min="1" max="2" name="favorita" id="favorita" required>
    </div>
    <div>
    <input class="submit-btn" type="submit" value="Agregar">
    </div>
</div>

    <div class="text-area">
    <label class="poem-name" for="poema">poema:</label>
    <textarea class="poem" name="poema" id="poema" cols="30" rows="10" required>
    </textarea>
    </div>


  </form>
    
</body>
</html>