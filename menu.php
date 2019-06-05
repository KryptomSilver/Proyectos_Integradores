<?php
session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="img/icono.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="frameworks/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="frameworks/datatables.min.css"/>
  <link rel="stylesheet" href="css/estilo.css">
  <script type="text/javascript" src="frameworks/datatables.min.js"></script>
  <title>Menu</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Proyectos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Proyectos/registrar_proyecto.php">Registar proyectos</a>
            <a class="dropdown-item" href="#">Ver Proyectos</a>
            <!--<div class="dropdown-divider"></div> divisor-->
          </div>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <a href="perfil.php" class=" mr-sm-2 btn"><img src="img/perfil.png" width="35" height="35" alt=""></a>
        <a href="procesos/close.php" class="btn"><img src="img/salir.png" width="35" height="35" alt=""></a>
      </form>

    </div>
  </nav>
  <div class="container">

  
  <div class="row">
    <div class="col">
      <br><h1 class='text-center'>Proyectos</h1>
      <a href="Proyectos/registrar_proyecto.php" class="btn btn-success btn-lg"  id="boton">Agregar</a>
    </div>
  </div>
  <div class="row">
  <div class =""></div>
  <div class="col-12">
  <br>
				<table  class="table table-responsive" id="tabla1">
					<thead class="">
						<tr>
              <th>#</th>
              <th>Institucion</th>
              <th>Departamento</th>
              <th>Tituloproyecto</th>
              <th>Coordinador</th>
              <th>Asignatura</th>
              <th>Semestre</th>
              <th>Cliente</th>
              <th>Plan de estudio</th>
              <th>Periodo Inicio</th>
              <th>Periodo Fin</th>
              <th>Area de conocimiento</th>
              <th>Ejecucion</th>
              <th>Acciones</th>
						</tr>
					</thead>

					<tbody>
						<?php
            include('php/conexion.php');
            $sql = "SELECT * FROM datos_generales where  IdUsuario = (SELECT IdUsuario  from usuarios where No_Control ='".$_SESSION['usuario']."')";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) { ?>
							<tr>
                <td><?php echo $row['Id_Proyecto'];?></td>
                <td><?php echo $row['Institucion'];?></td>
                <td><?php echo $row['Departamento'];?></td>
                <td><?php echo $row['Tituloproyecto'];?></td>
                <td><?php echo $row['Coordinador'];?></td>
                <td><?php echo $row['Asignatura'];?></td>
                <td><?php echo $row['Semestre'];?></td>
                <td><?php echo$row['Cliente'];?></td>
                <td><?php echo $row['Planestudio'];?></td>
                <td><?php echo$row['Periodo'];?></td>
                <td><?php echo$row['PeriodoFin'];?></td>
                <td><?php echo$row['Areaconocimiento'];?></td>
                <td><?php echo $row['Ejecucion'];?></td>
                
                <td><a href="#" data-href="procesos/delete.php?id=<?php echo $row['Id_Proyecto']; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="img/eliminar.ico" width="30" height="30" class="d-inline-block align-top" alt=""></a>
                <a href="editar_proyecto.php?id=<?php echo $row['Id_Proyecto']; ?>"><img src="img/editar.ico" width="30" height="30" class="d-inline-block align-top" alt=""></a>
                </td>
  							</tr>
						<?php } ?>
          </tbody>
          <tfoot>
          <tr>
              <th>#</th>
              <th>Institucion</th>
              <th>Departamento</th>
              <th>Tituloproyecto</th>
              <th>Coordinador</th>
              <th>Asignatura</th>
              <th>Semestre</th>
              <th>Cliente</th>
              <th>Plan de estudio</th>
              <th>Periodo Inicio</th>
              <th>Periodo Final</th>
              <th>Area de conocimiento</th>
              <th>Ejecucion</th>
              <th>Acciones</th>
						</tr>
                </tfoot>
				</table>
  </div>
<div class=""></div>

  </div>
  
</div>
        




      <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

					</div>

					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
    
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
<div id="PiePagina">
  <p class="text-center"><small>Proyectos Integradores/ Abel Romero Ruiz, Edy Fernando Negrete, Blanca Jazmin Victorino Espinoza, Jose Alberto Lopez Muñoz / © (26/03/2019). (Instituto Tegnologico de colima). Todos los derechos reservados.</small></p>
</div>

</body>
<script>
$('#tabla1').DataTable( {
    
        
    } );
</script>
</html>
