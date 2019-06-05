<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "proyectos_integradores");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM datos_generales WHERE Id_Proyecto = $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ../menu.php');
} else {
    echo "Error deleting record";
}
?>
