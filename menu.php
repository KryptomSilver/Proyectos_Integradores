<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="img/icono.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/css/bootstrap.min.css">
  <title></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/icono.ico" width="30" height="30" class="d-inline-block align-top" alt="">
      Proyectos Integradores
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Proyectos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Proyectos/registrar_proyecto.html">Registar proyectos</a>
            <a class="dropdown-item" href="#">Ver Proyectos</a>
            <!--<div class="dropdown-divider"></div> divisor-->
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button type="button" class="btn btn-light">Salir</button>
      </form>
    </div>
  </nav>

  <?php
  $dbhost='localhost';
  $dbuser='root';
  $dbpass='';
  $dbname='proyectos_integradores';
  $conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  if (!$conn) {
  	die('Coult not connect: '. mysqli_error());
  }
  echo 'Connected successfully<br>';
  $sql = 'SELECT * FROM datos_generales';
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) >0 ) {
    echo "<table border = '1' class='table'> \n";
    echo "<thead>";
    echo "<tr>";
    echo "<td>Id_Proyecto</td>";
    echo "<td>Institucion</td>";
    echo "<td>Departamento</td>";
    echo "<td>Tituloproyecto</td>";
    echo "<td>Coordinador</td>";
    echo "<td>Asignatura</td>";
    echo "<td>Acciones</td>";
    echo "</tr>";
    echo "</thead>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>".$row['Id_Proyecto']."</td>";
      echo "<td>".$row['Institucion']."</td>";
      echo "<td>".$row['Departamento']."</td>";
      echo "<td>".$row['Tituloproyecto']."</td>";
      echo "<td>".$row['Coordinador']."</td>";
      echo "<td>".$row['Asignatura']."</td>";
      echo "<td><a href='delete.php?id=".$row['Id_Proyecto']."'>Delete</a></td>";
      echo "</tr>";
      echo "</tbody>";
      echo "</table>";
  	}
  }else {
  	echo "0 results";
  }
  mysqli_close($conn);
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
