<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='proyectos_integradores';
$institucion = $_POST["institucion"];
$departamento = $_POST["departamento"];
$tituloproyecto = $_POST["tituloproyecto"];
$coordinador = $_POST["coordinador"];
$asignatura = $_POST["asignatura"];
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
	die('Coult not connect: '. $conn->connect_error);
}
$sql = "INSERT INTO datos_generales (Id_Proyecto,Institucion,Departamento,Tituloproyecto,Coordinador,Asignatura) VALUES (NULL,'$institucion','$departamento','$tituloproyecto','$coordinador','$asignatura')";


if ($conn->query($sql) === TRUE) {

		echo "Nuevo registro credo";
}else {
	echo "Error: ". $sql . "<br>". $conn->error;
}
$conn->close();


?>
