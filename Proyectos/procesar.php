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
$colaborador = $_POST["colaborador"];
$cliente = $_POST["cliente"];
$planestudio = $_POST["planestudio"];
$periodo = $_POST["periodo"];
$areaconocimiento = $_POST["areaconocimiento"];
$ejecucion =$_POST["ejecucion"];
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
	die('Coult not connect: '. $conn->connect_error);
}
$sql = "INSERT INTO datos_generales (Id_Proyecto,Institucion,Departamento,Tituloproyecto,Coordinador,Asignatura,Cliente,Planestudio,Periodo,Areaconocimiento,Ejecucion)
 VALUES (NULL,'$institucion','$departamento','$tituloproyecto','$coordinador','$asignatura','$cliente','$planestudio','$periodo','$areaconocimiento','$ejecucion')";


if ($conn->query($sql) === TRUE) {
		echo "<script>
                alert('Registro guardado');
                window.location='registrar_proyecto.html'
    </script>";
}else {
	echo "Error: ". $sql . "<br>". $conn->error;

}
$conn->close();


?>
