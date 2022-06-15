
<?=$cabecera?>

<a href="<?=base_url('centros/crear');?>"><button type="button" class="btn btn-success">Agregar Centro</button> </a>
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

                <?php foreach($centros as $Centro): ?>

                <tr>
                    <td><?=$Centro['IdCentro']; ?></td>
                    <td><?=$Centro['nombreCentro']; ?></td>
                    <td><?=$Centro['descripcionCentro']; ?></td>
                    <td>
                    <a href="<?=base_url('centros/editar/'.$Centro['IdCentro']); ?>" type="button" class="btn btn-info">Editar</a>
                    <a href="<?=base_url('centros/borrar/'.$Centro['IdCentro']); ?>" type="button" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>