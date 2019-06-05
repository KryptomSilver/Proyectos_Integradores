<?php
session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
  header("Location: index.php");
  die();
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="img/icono.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="frameworks/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/estilo.css">
  <title>Proyectos Integradores</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="https://www.itcolima.edu.mx">
      <img src="img/icono.ico" width="30" height="30" class="d-inline-block align-top" alt="">
      Proyectos Integradores
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Proyectos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Registar proyectos</a>
            <a class="dropdown-item" href="#">Ver Proyectos</a>
            <!--<div class="dropdown-divider"></div> divisor-->
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="#" class=" mr-sm-2"><img src="img/perfil.png" width="35" height="35" alt=""></a>
        <a href="procesos/close.php" class="btn"><img src="img/salir.png" width="35" height="35" alt=""></a>
      </form>
    </div>
  </nav>
  <br>
  <div class="container">
    <div class="Nombre">
      <?php
      $varperfil = $_SESSION['usuario'];
      echo $varperfil;
      $conexion = mysqli_connect("localhost", "root", "", "proyectos_integradores");
      $sql = "SELECT * FROM usuarios where No_Control = '$varperfil'";
      $result = mysqli_query($conexion, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<p class='text-center'>Nombre: ".$row['Nombre']."\n".$row['PrimerAp']."\n".$row['SegundoAp']."\n"."</p>";
      }
      ?>
    </div>
    <div class="">
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "proyectos_integradores");
      $sql = "SELECT * FROM usuarios where No_Control = '$varperfil'";
      $result = mysqli_query($conexion, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<p class='text-center'>No. Control: " .$row['No_Control']."</p>";
      }
      ?>
    </div>
    <div class="">
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "proyectos_integradores");
      $sql = "SELECT * FROM usuarios where No_Control = '$varperfil'";
      $result = mysqli_query($conexion, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<p class='text-center'>Correo: " .$row['email']."</p>";
      }
      ?>
    </div>

  </div>
  <div id="PiePagina">
    <p class="text-center"><small>Proyectos Integradores/ Abel Romero Ruiz, Edy Fernando Negrete, Blanca Jazmin Victorino Espinoza, Jose Alberto Lopez Muñoz / © (26/03/2019). (Instituto Tegnologico de colima). Todos los derechos reservados.</small></p>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="css/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
