<?php
include 'includes/header.php';
include 'config/connect.php';
session_start();



?>



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
            <form action="lib/reservaciones/create.php" method="POST">
                <div class="form-group">
                    <label for="my-input">Fecha</label>
                    <input id="my-input" class="form-control" type="text" name="fecha">
                </div>
                <div class="form-group">
                    <label for="my-input">Cuarto</label>
                    <input id="my-input" class="form-control" type="text" name="cuarto">
                </div>
                <div class="form-group">
                    <label for="my-input">Cliente</label>
                    <input id="my-input" class="form-control" type="text" name="cliente">
                </div>
                <div class="form-group">
                    <label for="my-input">Monto</label>
                    <input id="my-input" class="form-control" type="text" name="precio">
                </div>
                
                <input type="submit" class="btn btn-block btn-success" value="Registrar">
            </form>
        </div>

        <div class="col-md-7 mt-5">

            <table class="table table-bordered w-100">

                <thead>
                    <th>Número</th>
                    <th>Fecha</th>
                    <th>Cuarto</th>
                    <th>Pago</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </thead>            
            

                <tbody>


                    
                    <?php

                    $nueva= "opcional";
                    $sql_read = "SELECT reservaciones.Num_re, 
                    reservaciones.Num_ba, reservaciones.fecha_re, reservaciones.cuarto_re, reservaciones.id_cliente, reservaciones.pago_re, clientes.nom_cl
                    FROM reservaciones
                    INNER JOIN clientes
                    on(clientes.id_cliente = reservaciones.id_cliente);";
                    $sql_read_query = mysqli_query($conn,$sql_read);
                    while($rowc = mysqli_fetch_array($sql_read_query)){   ?>
                    
                    <tr>

                    <td><?= $rowc['Num_re'] ?></td>
                    <td><?= $rowc['fecha_re'] ?></td>
                    <td><?= $rowc['id_cliente'] ?></td>
                    <td><?= $rowc['pago_re'] ?></td>
                    <td><?= $rowc['nom_cl'] ?></td>
                    <td><a href="lib/reservaciones/delete.php?id=<?= $rowc['Num_re'] ?>" class="btn btn-danger  m-2"><i class="fas fa-trash"></i></a> <a href="editcl.php?id=<?= $rowc['id_cliente'] ?>" class="btn btn-warning  m-2"><i class="fas fa-edit"></i></a></td>
                

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