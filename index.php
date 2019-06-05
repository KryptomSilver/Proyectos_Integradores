
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="img/icono.ico">
		<title>Login</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
	<link rel="stylesheet" href="css/css/bootstrap.min.css" >
	<link rel="stylesheet"  href="frameworks/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/estilo.css" >
</head>
	<body>


	<div class="container login-container">
	            <div class="row">
								<div class="col-md-3">
								</div>
	                <div class="col-md-6 login-form-1">
										<br><br><br>
	                    <form action="procesos/ProcesarLogin.php" class="f" method="POST">
												<img src="img/logo.png" width="100" height="100" id="imagenindex"class="d-inline-block align-top" alt="">
												<h3 class="text-center">Inicio de sesión</h3>
												<div class="form-group">
													<label for="Nombre">No_Control</label>
													<input type="text" class="form-control" name="no_control" id="No_Control" placeholder="Escribe tu No_Control">
												</div>
												<div class="form-group">
													<label for="Pass">Contraseña</label>
													<input type="password" class="form-control" name="pass" id="Pass" placeholder="Escribe tu Clave">
												</div>
												<p class="text-center">
													<a href="registro.html" class="btn btn-link" role="button" aria-pressed="true">Registrase</a>
												</p>
												<p class="text-center">
													<input type="submit" value="Iniciar sesion" class="btn btn-primary">
												</p>
	                    </form>
	                </div>
									<div class="col-md-3">

									</div>
	            </div>
	        </div>
					<div id="PiePaginaindex">
  <p class="text-center"><small>Proyectos Integradores/ Abel Romero Ruiz, Edy Fernando Negrete, Blanca Jazmin Victorino Espinoza, Jose Alberto Lopez Muñoz / © (26/03/2019). (Instituto Tegnologico de colima). Todos los derechos reservados.</small></p>
	</div>
	
	</body>

	</html>
