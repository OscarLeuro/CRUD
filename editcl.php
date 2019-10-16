<?php

include 'includes/header.php';

include 'config/connect.php';

$id = $_GET['id'];
$sql_read = "SELECT * FROM clientes WHERE id_cliente = $id ";
$sql_read_query = mysqli_query($conn,$sql_read);

if(mysqli_num_rows($sql_read_query) == 1){


        $rowc = mysqli_fetch_array($sql_read_query);


}



?>



<div class="container">
    <div class="row mt-5">
        

        <div class="col-md-4 mt-5">
            <form action="lib/clientes/edit.php?id=<?= $rowc['id_cliente'] ?>" method="POST">
                <div class="form-group">
                    <label for="my-input">Nombre</label>
                    <input id="my-input" class="form-control" type="text" name="name" value="<?= $rowc['nom_cl'] ?>">
                </div>
                <div class="form-group">
                    <label for="my-input">Apellido</label>
                    <input id="my-input" class="form-control" type="text" name="ape" value="<?= $rowc['ape_cl'] ?>">
                </div>
                <div class="form-group">
                    <label for="my-input">País</label>
                    <input id="my-input" class="form-control" type="text" name="country" value="<?= $rowc['pais_cl'] ?>">
                </div>
                <div class="form-group">
                    <label for="my-input">Ciudad</label>
                    <input id="my-input" class="form-control" type="text" name="city" value="<?= $rowc['ciudad_cl'] ?>">
                </div>
                <div class="form-group">
                    <label for="my-input">Teléfono</label>
                    <input id="my-input" class="form-control" type="text" name="tel" value="<?= $rowc['tel_cl'] ?>">
                </div>
                
                <input type="submit" class="btn btn-block btn-success" value="Actualizar" name="actualizar">
            </form>
        </div>

        <div class="col-md-7 mt-5">

            <table class="table table-bordered w-100">

                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    
                </thead>            
            

                <tbody>

                    <?php
                    $id = $_GET['id'];
                    $sql_read = "SELECT * FROM clientes WHERE id_cliente = $id ";
                    $sql_read_query = mysqli_query($conn,$sql_read);
                    while($rowc = mysqli_fetch_array($sql_read_query)){   ?>
                    
                    <tr>

                    <td><?= $rowc['nom_cl'] ?></td>
                    <td><?= $rowc['ape_cl'] ?></td>
                    <td><?= $rowc['pais_cl'] ?></td>
                    <td><?= $rowc['ciudad_cl'] ?></td>
                    <td><?= $rowc['tel_cl'] ?></td>
                   
                

                    </tr>

                <?php  }
                    
                    
                    ?>




                </tbody>

            </table>

        </div>



    </div>
</div>





<?php

include 'includes/footer.php';

?>