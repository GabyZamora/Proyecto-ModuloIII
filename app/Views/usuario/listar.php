<?= $this->extend('template/admin_template') ?>

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
<a class="btn btn-success" href="<?=base_url('usuarios/crear')?>">Crear un nuevo Usuario  </a>
    
    <div class="container">
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo de Usuario </th>
                    <th>Rol </th>
                    <th>DUI</th>
                    <th>Telefono </th>
                    <th>Correo Electronico</th>
                    <th> Fecha de Nacimiento </th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?=$usuario['IdUsuario']; ?></td>
                    <td><?=$usuario['NombreUsuario']; ?></td>
                    <td><?=$usuario['Usuario']; ?> </td>
                    <td><?=$usuario['IdRol']; ?> </td>
                    <td><?=$usuario['DuiUsuario']; ?> </td>
                    <td><?=$usuario['TelUsuario']; ?> </td>
                    <td><?=$usuario['CorreoUsuario']; ?> </td>
                    <td><?=$usuario['FechaNacimiento']; ?> </td>
                   
                    <td><a href="<?=base_url('usuarios/editar/'.$usuario['IdUsuario']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('usuarios/borrar/'.$usuario['IdUsuario']);?>" class="btn btn-danger" type="button">Borrar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
        </table>

        <!----?php echo $paginador->simpleLinks(); ?--->
    </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?= $this->endSection() ?>
