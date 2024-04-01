<?php
    require 'login-checker.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require 'links.php'
    ?>
    <link rel="stylesheet" href="../css/delete-poem.css">
    <title>Delete</title>
</head>
<body>
    <?php
    require 'navbar.php';
    require 'display-poems.php';
    ?>
    <div class='eliminar'>
    <form action="delete-poem-process.php" method="post">
    <label class="label-delete" for="id_poema">Ingrese el ID a eliminar: </label>
    <br>
    <input type="text" id="id_poema" name="id_poema" required>
    <input type="submit" name='eliminar' value="Eliminar">
    </form>
    </div>
    <br><br>
</body>
</html>