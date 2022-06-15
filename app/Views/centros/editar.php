<?= $this->extend('/template/admin_template') ?>

<?= $this->section('content') ?>
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="listar">Regresar</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
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
                        <input id="nombre" value="<?=$Centro['NombreCentro']?>" class="form-contCentro" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="5"><?=$Centro['DescripcionCentro']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </p>
        </div>
    </div>
<?=$pie?>
<?= $this->endSection() ?>
