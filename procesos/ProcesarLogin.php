<?php
$nocontrol = $_POST["no_control"];//Esto se obtine desdel input del formulario y se le asigna a una variable
$contra = $_POST["pass"];//Esto se obtine desdel input del formulario y se le asigna a una variable

$conexion = mysqli_connect("localhost", "root", "", "proyectos_integradores");  //aqui va la conexion de base de datos
$validausuario = ("SELECT * FROM usuarios WHERE No_Control = '$nocontrol'"); //usuarios es la tabla
$resultado = mysqli_query($conexion, $validausuario);

if ($row=mysqli_fetch_array($resultado)) {
	if ($row['No_Control'] == $nocontrol && $row['password'] == $contra) {
			if ($nocontrol == '16460094') {
				session_start();   //Aqui se inicia Sesion para el administrador
				$_SESSION['usuario'] = $nocontrol; //seguarda el numero de control en una variable
				header("Location: ../Admin-master/index.html"); //Aqui va a donde te va a mandar si es que todo esta correcto
			}else {
				session_start();   //Aqui se inicia Sesion :v
				$_SESSION['usuario'] = $nocontrol; //seguarda el numero de control en una variable
				header("Location: ../menu.php"); //Aqui va a donde te va a mandar si es que todo esta correcto
			}

	}else{
		echo "<center><br><br><h2>Datos Incorrectos</h2></center>";
		header( "refresh:2; url=../index.php" );//Aqui te manda otra vez a iniciar sesion por que la cago :V
	}
}else{
	header("Location: ../index.php");//Aqui te manda otra vez a iniciar sesion por NO EXISTE el no_control
}

?>
