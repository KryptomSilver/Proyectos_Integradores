<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='proyectos_integradores_jaz';
$nombre = $_POST["nombre"];
$primerapellido = $_POST["primerapellido"];
$segapellido = $_POST["segapellido"];
$foto = $_POST["foto"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$contra = $_POST["contra"];
$nocontrol = 123242;
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
	die('Coult not connect: '. $conn->connect_error);
}
$sql = "CALL sp_AgregarUsuario('".$nocontrol.",".$nombre.",".$primerapellido.",".$segapellido.",".$foto.",".$telefono.",".$correo."')";


if ($conn->query($sql) === TRUE) {
		echo "<script>
                alert('Registro guardado');
                window.location='../registro.html'
    </script>";
}else {
	echo "Error: ". $sql . "<br>". $conn->error;

}
$conn->close();


?>
