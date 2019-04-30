<?php
$nocontrol = $_POST["no_control"];//Esto se obtine desdel input del formulario y se le asigna a una variable
$contra = $_POST["pass"];//Esto se obtine desdel input del formulario y se le asigna a una variable

$conexion = mysqli_connect("localhost", "root", "", "proyectos_integradores");  //aqui va la conexion de base de datos
$validausuario = ("SELECT * FROM usuarios WHERE No_Control = '$nocontrol'"); //usuarios es la tabla
$resultado = mysqli_query($conexion, $validausuario);

if ($row=mysqli_fetch_array($resultado)) {
	if ($row['No_Control'] == $nocontrol && $row['password'] == $contra) {
				session_start();   //Aqui se inicia Sesion :v
				$id=$row['No_Control'];

				header("Location: menu.php"); //Aqui va a donde te va a mandar si es que todo esta correcto
	}else{
		echo "<center><br><br><h2>Datos Incorrectos</h2></center>";
		header( "refresh:2; url=index.php" );//Aqui te manda otra vez a iniciar sesion por que la cago :V
	}
}else{
	header("Location: index.php");//Aqui te manda otra vez a iniciar sesion por NO EXISTE el no_control
}

?>
