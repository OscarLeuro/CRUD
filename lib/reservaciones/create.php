<?php
include '../../config/connect.php';
session_start();


$fecha = $_POST['fecha'];
$cuarto = $_POST['cuarto'];
$pago = $_POST['precio'];
$cliente = $_POST['cliente'];




$sql = "INSERT INTO reservaciones(cuarto_re, id_cliente, pago_re,fecha_re) VALUES('$cuarto','$cliente','$pago','$fecha') ";

mysqli_query($conn,$sql);

$_SESSION['mensaje'] = "Se creó la reservación";
$_SESSION['color'] ="success";

header('location:../../reservaciones.php')



?>