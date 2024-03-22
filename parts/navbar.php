<?php
    require 'login-checker.php';
?>



<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Poemas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agregar Poema</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Editar Poema</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Borrar Poema</a>
        </li>
      </ul>
        <form action="parts/logout.php" method="post">
        <button class="btn btn-danger" type="submit">Log Out</button>
</form>
        
    </div>
  </div>
</nav>
    
