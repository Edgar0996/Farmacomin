<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="images/icon.png" >

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">




  <title>EyTec</title>
</head>

<header>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="Mantenimiento.php"> Preventivo</a></li>
    <li><a href="Mantenimiento.php"> Correctivo</a></li>
    
  </ul>


  <div class="navbar-fixed">
    <nav class="white">
      <div class="nav-wrapper container">

        <a href="#!" class="brand-logo blue-text">
          <img src="images/logo.png" alt="logo de la empresa"  class="img-responsive hoverable" > 
        </a>

        <ul class="right hide-on-med-and-down ">
          <li><a href="index.php" class=" blue-text">Inicio</a></li>
          <li><a href="Nosotros.php" class=" blue-text">Nosotros</a></li>
          <li><a href="CCTV.php" class=" blue-text">Video Vigilancia</a></li>
          <li><a href="ComputoGamer.php" class=" blue-text">Equipos Gamer</a></li>
          <li><a href="SoporteTecnico.php" class=" blue-text">Soporte Tecnico</a></li>
          
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger blue-text" href="#" data-target="dropdown1">Mantenimiento<i class="material-icons right blue-text">arrow_drop_down</i></a></li>
        </ul>
        
        <a href="#" class="sidenav-trigger" data-target="responsive-menu">
          <i class="material-icons blue-text">menu</i>
          </a>
      </div>
    </nav>
  </div>

  <ul id="responsive-menu" class="sidenav">
  

    <li> <a href="#!" class="cyan-text"> Menú de opciones</a></li>

    <li> <a href="index.php">Inicio</a></li>
    <li> <a href="Nosotros.php">Nosotros</a></li>
    <li> <a href="ComputoGamer.php">Equipos Gamer</a></li>
    <li> <a href="Mantenimiento.php">Mantenimiento</a></li> 
    <li> <a href="CCTV.php">Video Vigilancia</a></li>
    <li> <a href="SoporteTecnico.php">Soporte tecnico</a></li>
    <li> <a href="DispositivosMoviles.php">Dispositivos móviles</a></li>
  </ul>

</header>