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
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Centro</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($dispositivos as $Dispositivo): ?>

                <tr>
                    <td><?=$Dispositivo['IdDispositivo']; ?></td>
                    <td><?=$Dispositivo['nombreDispositivo']; ?></td>
                    <td><?=$Dispositivo['marcaDispositivo']; ?></td>
                    <td><?=$Dispositivo['modeloDispositivo']; ?></td>
                    <td><?=$Dispositivo['IdCentro']; ?></td>
                    <td><?=$Dispositivo['descripcionDispositivo']; ?></td>
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