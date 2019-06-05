<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../img/icono.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../frameworks/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
  <title>Registrar Proyectos</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="https://www.itcolima.edu.mx">
      <img src="../img/icono.ico" width="30" height="30" class="d-inline-block align-top" alt="">
      Proyectos Integradores
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../menu.php">Inicio <span class="sr-only">(current)</span></a>
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
      <a href="../perfil.php" class=" mr-sm-2"><img src="../img/perfil.png" width="35" height="35" alt=""></a>
      <a href="../procesos/close.php" class="btn"><img src="../img/salir.png" width="35" height="35" alt=""></a>
      </form>
    </div>
  </nav>
  <br>
  <div class="container">
    <h3 class="text-center">Caracterizacion del Proyecto</h3>
    <br><br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>
    <br>
    <form action="procesar.php" method="post">
      <div class="form-group">
        <label class="labels" for="">Titulo del Proyecto: </label>
        <input type="text" name="tituloproyecto" value="" class="form-control" id="sel1">
      </div>
      <div class="form-group">
        <label class="labels">Tipo de Proyecto: </label>
        <select class="form-control" id="sel1" name="coordinador">
          <option>Selecciona un Tipo</option>
          <option>Formativo</option>
          <option>Resulutivo</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="departamento">Objetivo: </label>
        <textarea class="form-control" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label class="labels" id="departamento">Planteamiento del proyecto(descripcios,elemtos y formulacion): </label>
        <textarea class="form-control" rows="3"></textarea>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="form-group">
            <label class="labels" id="departamento">Justificacion: </label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label class="labels" id="departamento">Alcances: </label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label class="labels" id="departamento">Limitaciones y Restricciones: </label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      
      
      
      <br>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>


    </form>
    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="registrar_proyecto.php">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="competencias.php">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        
      </ul>
    </nav>
  </div>
  <div id="PiePagina">
    <p class="text-center"><small>Proyectos Integradores/ Abel Romero Ruiz, Edy Fernando Negrete, Jasmin Blanca / © (26/03/2019). (Instituto Tegnologico de colima). Todos los derechos reservados.</small></p>
  </div>
</body>

</html>