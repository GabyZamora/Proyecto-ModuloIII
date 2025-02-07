

<?=$cabecera?>

<a href="<?=base_url('incidentes/crear');?>"><button type="button" class="btn btn-success">Agregar Incidente</button> </a>
<a class="btn btn-warning" href="<?=base_url('reportes/incidentesReporte')?>">Imprimir</a>

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Dispositivo</th>
                    <th>Centro</th>
                    <th>Estado</th>
                    <th>Acciones</th>
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
                    <td>
                    <a href="<?=base_url('incidentes/editar/'.$Incidente['IdIncidente']); ?>" type="button" class="btn btn-info">Editar</a>
                    <a href="<?=base_url('incidentes/borrar/'.$Incidente['IdIncidente']); ?>" type="button" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>
