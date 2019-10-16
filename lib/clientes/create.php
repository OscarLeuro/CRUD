<?php

include '../../config/connect.php';

session_start();


$name = $_POST['name'];
$ape = $_POST['ape'];
$country = $_POST['country'];
$city = $_POST['city'];
$tel = $_POST['tel'];




$sql = "INSERT INTO clientes(nom_cl, ape_cl, pais_cl, ciudad_cl,tel_cl) VALUES('$name','$ape','$country','$city','$tel') ";

mysqli_query($conn,$sql);


$_SESSION['mensaje'] = 'Se registró el cliente correctamente';
$_SESSION['color'] = 'success';
header('location:../../index.php')



?>