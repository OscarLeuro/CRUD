
<?php

include 'includes/header.php';
include 'config/connect.php';
session_start();


?>


<hr>

<div class="container">
    <div class="row mt-5">
        

        <div class="col-md-4 mt-5">

<?php

if(isset($_SESSION['mensaje'])){?>


<div class="alert alert-<?= $_SESSION['color'] ?> alert-dismissible fade show" role="alert">

<?= $_SESSION['mensaje'] ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>




<?php  session_unset(); }?>



            <form action="lib/clientes/create.php" method="POST">
                <div class="form-group">
                    <label for="my-input">Nombre</label>
                    <input id="my-input" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="my-input">Apellido</label>
                    <input id="my-input" class="form-control" type="text" name="ape">
                </div>
                <div class="form-group">
                    <label for="my-input">País</label>
                    <input id="my-input" class="form-control" type="text" name="country">
                </div>
                <div class="form-group">
                    <label for="my-input">Ciudad</label>
                    <input id="my-input" class="form-control" type="text" name="city">
                </div>
                <div class="form-group">
                    <label for="my-input">Teléfono</label>
                    <input id="my-input" class="form-control" type="text" name="tel">
                </div>
                
                <input type="submit" class="btn btn-block btn-success" value="Registrar">
            </form>
        </div>

        <div class="col-md-7 mt-5">

            <table class="table table-bordered w-100">

                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </thead>            
            

                <tbody>

                    <?php
                    $sql_read = "SELECT * FROM clientes";
                    $sql_read_query = mysqli_query($conn,$sql_read);
                    while($rowc = mysqli_fetch_array($sql_read_query)){   ?>
                    
                    <tr>
                    <td><?= $rowc['id_cliente'] ?></td>
                    <td><?= $rowc['nom_cl'] ?></td>
                    <td><?= $rowc['ape_cl'] ?></td>
                    <td><?= $rowc['pais_cl'] ?></td>
                    <td><?= $rowc['ciudad_cl'] ?></td>
                    <td><?= $rowc['tel_cl'] ?></td>
                    <td><a href="lib/clientes/delete.php?id=<?= $rowc['id_cliente'] ?>" class="btn btn-danger  m-2"><i class="fas fa-trash"></i></a> <a href="editcl.php?id=<?= $rowc['id_cliente'] ?>" class="btn btn-warning  m-2"><i class="fas fa-edit"></i></a></td>
                

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