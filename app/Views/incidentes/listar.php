

<?=$cabecera?>

<a href="<?=base_url('incidentes/crear');?>"><button type="button" class="btn btn-success">Agregar Incidente</button> </a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($incidentes as $Incidente): ?>

                <tr>
                    <td><?=$Incidente['IdIncidente']; ?></td>
                    <td><?=$Incidente['nombreIncidente']; ?></td>
                    <td><?=$Incidente['descripcionIncidente']; ?></td>
                    <td>
                    <a href="<?=base_url('incidentes/editar/'.$Incidente['IdIncidente']); ?>" type="button" class="btn btn-info">Editar</a>
                    <a href="<?=base_url('incidentes/borrar/'.$Incidente['IdIncidente']); ?>" type="button" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>
