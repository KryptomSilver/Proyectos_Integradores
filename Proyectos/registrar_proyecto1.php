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
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <br>
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
        <select multiple class="form-control" id="sel1" name="departamento[]">
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
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
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
      <div class="row">
        <div class="col-6">
        <div class="form-group">
          <label id="">Periodo Inicio: </label>
          <input id="date" class="form-control" type="date" name="periodo">
        </div>  
        </div>
        <div class="col-6">
        <div class="form-group">
          <label id="">Periodo Fin: </label>
          <input id="date" class="form-control" type="date" name="periodofin">
        </div>
        </div>
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
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      

    </form>
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
    <nav>
      <ul class="pagination justify-content-center">
      <li class="page-item active"><a class="page-link" href="registrar_proyecto.php">1</a></li>
        <li class="page-item"><a class="page-link" href="caracterizacion_proyecto.php">2</a></li>
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