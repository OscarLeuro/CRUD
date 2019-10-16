<?php

include '../../config/connect.php';
session_start();


$id = $_GET['id'];


$sql_delete = "DELETE FROM clientes WHERE id_cliente = $id";

mysqli_query($conn,$sql_delete);

$_SESSION['mensaje'] = 'Se eliminó el cliente';
$_SESSION['color'] = 'danger';

header('location:../../index.php');


?>