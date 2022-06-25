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
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Dispositivo</th>
                    <th>Centro</th>
                    <th>Estado</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Modificación</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($incidentes as $Incidente): ?>

                <tr>
                    <td><?=$Incidente['IdIncidente']; ?></td>
                    <td><?=$Incidente['NombreIncidente']; ?></td>
                    <td><?=$Incidente['DescripcionIncidente']; ?></td>
                    <td><?=$Incidente['IdDispositivo']; ?></td>
                    <td><?=$Incidente['IdCentro']; ?></td>
                    <td><?=$Incidente['IdEstado']; ?></td>
                    <td><?=$Incidente['fechaIngreso']; ?></td>
                    <td><?=$Incidente['fechaModificacion']; ?></td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>

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