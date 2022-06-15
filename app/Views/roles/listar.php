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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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

<a href="<?=base_url('roles/crear');?>"><button type="button" class="btn btn-success">Agregar Rol</button> </a>
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

                <?php foreach($roles as $rol): ?>

                <tr>
                    <td><?=$rol['IdRol']; ?></td>
                    <td><?=$rol['nombreRol']; ?></td>
                    <td><?=$rol['descripcionRol']; ?></td>
                    <td>
                    <a href="<?=base_url('roles/editar/'.$rol['IdRol']); ?>" type="button" class="btn btn-info">Editar</a>
                    <a href="<?=base_url('roles/borrar/'.$rol['IdRol']); ?>" type="button" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>
<?= $this->endSection() ?>
