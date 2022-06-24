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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h1>Reporte de usuarios</h1>
        <table class="table table-bordered" id="tabla">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo de Usuario </th>
                    <th>Rol </th>
                    <th>DUI</th>
                    <th>Telefono </th>
                    <th>Correo Electronico</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Fecha de ingreso</th>
                    <th>Fecha modificación</th>

                </tr>
            </thead>
            <tbody>

            <?php foreach($usuarios as $usuario): ?>


                <tr>
                    <td><?=$usuario['IdUsuario']; ?></td>
                    <td><?=$usuario['NombreUsuario']; ?></td>
                    <td><?=$usuario['Usuario']; ?> </td>
                    <td><?=$usuario['IdRol']?></td>
                    <td><?=$usuario['DuiUsuario']; ?> </td>
                    <td><?=$usuario['TelUsuario']; ?> </td>
                    <td><?=$usuario['CorreoUsuario']; ?> </td>
                    <td><?=$usuario['FechaNacimiento']; ?> </td>
                    <td><?=$usuario['fechaIngreso']; ?> </td>
                    <td><?=$usuario['fechaModificacion']; ?> </td>
                </tr>
                <?php endforeach; ?>

        </tbody>
        </table>



        </div>
    </section>

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

