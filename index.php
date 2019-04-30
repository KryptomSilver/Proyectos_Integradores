	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="img/icono.ico">
		<title>Login</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
	<link rel="stylesheet" href="css/css/bootstrap.min.css" >
</head>
	<body>


	<div class="container login-container">
	            <div class="row">
								<div class="col-md-3">
								</div>

	                <div class="col-md-6 login-form-1">
										<br><br><br><br><br>
	                    <form action="ProcesarLogin.php" class="f" method="POST">
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

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

	</html>
