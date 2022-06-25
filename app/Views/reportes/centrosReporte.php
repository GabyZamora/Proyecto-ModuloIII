<?php

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Modificación</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($centros as $centro): ?>
                <tr>
                    <td><?=$centro['IdCentro']; ?></td>
                    <td><?=$centro['nombreCentro']; ?></td>
                    <td><?=$centro['descripcionCentro']; ?></td>
                    <td><?=$centro['fechaIngreso']; ?> </td>
                    <td><?=$centro['fechaModificacion']; ?> </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
        </table>

        <!----?php echo $paginador->simpleLinks(); ?--->
    </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</body>
</html>
<?php
    $html=ob_get_clean();
    //echo $html;
    
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    //$dompdf->setPaper('letter');
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("archivo_.pdf", array("Attachment" =>false));

?>