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
    <h3 class="text-center">Datos generales del Proyecto</h3>
    <br><br>
    <form action="procesar.php" method="post">
      <div class="form-group">
        <label class="labels">Institucion: </label>
        <select class="form-control" id="sel1" name="institucion">
          <option>Selecciona una institucion</option>
          <option>Instituto Tecnologico de Colima</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="">Departamento Academico: </label>
        <select class="form-control" id="sel1" name="departamento">
          <option>Selecciona un departamento</option>
          <option>Ciencias Basicas</option>
          <option>Posgrado</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" for="">Titulo del Proyecto: </label>
        <input type="text" name="tituloproyecto" value="" class="form-control" id="sel1">
      </div>
      <div class="form-group">
        <label class="labels">Coordinador: </label>
        <select class="form-control" id="sel1" name="coordinador">
          <option>Selecciona un coordinador</option>
          <option>Jose Luis Lopez</option>
          <option>Deboria Fabiola </option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="departamento">Asignatura: </label>
        <select class="form-control" id="sel1" name="asignatura">
          <option>Selecciona una asignatura</option>
          <option>Calculo Integral</option>
          <option>Discretas</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="">Semestre: </label>
        <select class="form-control" id="sel1" name="semestre">
          <option>Selecciona un Semestre</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="">Colaborador: </label>
        <select class="form-control" id="sel1" name="colaborador">
          <option>Selecciona un Colaborador</option>
          <option>Abel Romero Ruiz</option>
          <option>Edy Fernando Negrete Andres</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="">Cliente: </label>
        <input type="text" class="form-control" name="cliente" value="">
      </div>
      <div class="form-group">
        <label class="labels" id="">Plan de estudio: </label>
        <select class="form-control" id="sel1" name="planestudio">
          <option>Selecciona el plan estudio</option>
          <option>IINF-2010-220</option>
        </select>
      </div>
      <div class="form-group">
        <label id="">Periodo Inicio: </label>
        <input id="date" class="form-control" type="date" name="periodo">
        
      </div>
      <div class="form-group">
        <label class="labels" id="">Area Conocimiento: </label>
        <select class="form-control " id="sel1" name="areaconocimiento">
          <option>Selecciona el area de Conocimiento</option>
          <option>Ciencias Baicas</option>
          <option>Ciencias Agricolas</option>
          <option>Ciencias del Mar</option>
        </select>
      </div>
      <div class="form-group">
        <label class="labels" id="">Tipo de Ejecucion: </label>
        <select class="form-control" id="sel1" name="ejecucion">
          <option>Selecciona el tipo de ejecucion</option>
          <option>Especialidad</option>
          <option>Servicio Social</option>
          <option>Titulacion</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>


    </form>
    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
      </ul>
    </nav>
  </div>
  <div id="PiePagina">
    <p class="text-center"><small>Proyectos Integradores/ Abel Romero Ruiz, Edy Fernando Negrete, Jasmin Blanca / © (26/03/2019). (Instituto Tegnologico de colima). Todos los derechos reservados.</small></p>
  </div>
</body>

</html>