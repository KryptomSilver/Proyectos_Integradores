<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='proyectos_integradores';
$nombre = $_POST["nombre"];
$primerapellido = $_POST["primerapellido"];
$segapellido = $_POST["segapellido"];
$foto = $_POST["foto"];
$correo = $_POST["correo"];
$contra = $_POST["contra"];
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
	die('Coult not connect: '. $conn->connect_error);
}
$sql = "INSERT INTO usuarios (No_Control,Nombre,PrimerAp,SegundoAp,image,email,password)
 VALUES (NULL,'$nombre','$primerapellido','$segapellido','$foto','$correo','$contra')";


if ($conn->query($sql) === TRUE) {
		echo "<script>
                alert('Registro guardado');
                window.location='registro.html'
    </script>";
}else {
	echo "Error: ". $sql . "<br>". $conn->error;

}
$conn->close();


?>
