<?php
$Correo = $_POST["no_control"];//Esto se obtine desdel input del formulario y se le asigna a una variable
$contra = $_POST["pass"];//Esto se obtine desdel input del formulario y se le asigna a una variable

$conexion = mysqli_connect("localhost", "root", "", "proyectos_integradores");  //aqui va la conexion de base de datos
$validausuario = ("SELECT * FROM usuarios WHERE No_Control = '$Correo'"); //usuarios es la tabla
$resultado = mysqli_query($conexion, $validausuario);

if ($row=mysqli_fetch_array($resultado)) {
	if ($row['No_Control'] == $Correo && $row['password'] == $contra) {
				session_start();   //Aqui se inicia Sesion :v
				$id=$row['No_Control'];  //Id_U reemplazalo por el campo del id de tu tabla usuarios, ejemplo, si pusiste en la tabla, Id_Usuario, entonces va $id=$row['Id_Usuario']
				$_SESSION['Admin']=$cargo;//Aqui no hay pedos, las variables $_SESSION['pueden tener el nombre que sea, pero recuerdalos para utilizarlos en la interfaz de usuario :V']
				$_SESSION['id']=$id; //Este no hay necesidad de que lo edites, ya que solo se asigna el valor de la variable $id
				$NombreUs=$row['Nombre'];
				$_SESSION['nombre']=$NombreUs;

				header("Location: menu.html"); //Aqui va a donde te va a mandar si es que todo esta correcto
	}else{
		echo "<center><br><br><h2>Datos Incorrectos</h2></center>";
		header( "refresh:2; url=index.php" );//Aqui te manda otra vez a iniciar sesion por que la cago :V
	}
}else{
	header("Location: index.php");//Aqui te manda otra vez a iniciar sesion por NO EXISTE el no_control
}

?>
