
<?=$cabecera?>
    Formulario de editar
    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Editar Centro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('centros/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$Centro['IdCentro']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre de Centro</label>
                        <input id="nombre" value="<?=$Centro['nombreCentro']?>" class="form-contCentro" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="5"><?=$Centro['descripcionCentro']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </p>
        </div>
    </div>
