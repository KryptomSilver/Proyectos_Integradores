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
$periodofin = $_POST["periodofin"];
$areaconocimiento = $_POST["areaconocimiento"];
$ejecucion =$_POST["ejecucion"];
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
	die('Coult not connect: '. $conn->connect_error);
}
$sql = "CALL  sp_AgregarProyecto('".$institucion.",".$dep_Academico.","$dep_Academico",".$titulo_Proyecto.",".$coordinador.",".$asignatura.","$semestre",".$colaboradores.",".$cliente.",".$plan_estudio.",".$fecha_inicio.",".$fecha_final.",".$tipo_proyecto.",".$planteamiento.",".$justificacion.",".$alcance.",".$limitaciones.",".$cronograma.",".$impacto_proyecto.",".$firma.",".$estatus."')";


if ($conn->query($sql) === TRUE) {
		echo "<script>
                alert('Registro guardado');
                window.location='registrar_proyecto.php'
    </script>";
}else {
	echo "Error: ". $sql . "<br>". $conn->error;

}
$conn->close();


?>
