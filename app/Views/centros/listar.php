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
<a class="btn btn-success" href="<?=base_url('centros/crear')?>">Crear un nuevo centro  </a>
    
    <div class="container">
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($centros as $centro): ?>
                <tr>
                    <td><?=$centro['Idcentro']; ?></td>
                    <td><?=$centro['NombreCentro']; ?></td>
                    <td><?=$centro['descripcionentro']; ?> </td>
                   
                    <td><a href="<?=base_url('centros/editar/'.$centro['IdCentro']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('centros/borrar/'.$centro['IdCentro']);?>" class="btn btn-danger" type="button">Borrar</button>
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
