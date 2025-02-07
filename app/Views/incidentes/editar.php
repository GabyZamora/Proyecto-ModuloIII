
<?=$cabecera?>
    Formulario de editar
    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Editar Incidente </h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('incidentes/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$Incidente['IdIncidente']?>">
                    <div class="form-group">
                        <label for="nombre">Incidente</label>
                        <input id="nombre" value="<?=$Incidente['NombreIncidente']?>" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="5"><?=$Incidente ['DescripcionIncidente']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dispositivo">Dispositivo</label>
                        <input id="dispositivo" value="<?=$Incidente['IdDispositivo']?>" class="form-control" type="text" name="dispositivo">
                    </div>
                    <div class="form-group">
                        <label for="centro">Centro</label>
                        <input id="centro" value="<?=$Incidente['IdCentro']?>" class="form-control" type="text" name="centro">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input id="estado" value="<?=$Incidente['IdEstado']?>" class="form-control" type="text" name="estado">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </p>
        </div>
    </div>
