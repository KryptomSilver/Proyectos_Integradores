<?php
session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
  header("Location: ../index.php");
  die();
}
session_destroy();
header("Location: ../index.php");
?>