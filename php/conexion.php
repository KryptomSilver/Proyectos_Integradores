<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='proyectos_integradores';
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
die('Coult not connect: '. mysqli_error());
}
?>