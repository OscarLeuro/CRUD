<?php
include '../../config/connect.php';
session_start();

$id = $_GET['id'];


$sql_delete = "DELETE FROM reservaciones WHERE Num_re = $id";

mysqli_query($conn,$sql_delete);

$_SESSION['mensaje'] = 'Se eliminó el reservación';
$_SESSION['color'] = 'danger';


header('location:../../reservaciones.php');


?>