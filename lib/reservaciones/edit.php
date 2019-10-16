<?php

include '../../config/connect.php';



if(isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $ape = $_POST['ape'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $tel = $_POST['tel'];
    



            $sql_edit = "UPDATE clientes SET nom_cl = '$name', ape_cl = '$ape', pais_cl ='$country', ciudad_cl = '$city',tel_cl = $tel WHERE id_cliente = $id";

            mysqli_query($conn,$sql_edit);


            header('location:../../index.php');

}


?>