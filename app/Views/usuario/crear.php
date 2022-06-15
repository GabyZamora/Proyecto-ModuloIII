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




Crear nuevo usuario

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos del Usuario</h5>
        <p class="card-text">
            
<form method="post" action="<?=site_url('usuario/guardar')?>" enctype="multipart/form-data">


<div class="form-group">
    <label for="nombre">Nombre Completo</label>
    <input id="nombre" class="form-control" type="text" name="nombre">
</div>
<div class="form-group">
    <label for="usuario">Usuario</label>
    <input id="usuario" class="form-control" type="text" name="usuario">
</div>

<div class="form-group">
      <label for="inputState">Rol</label>
      <select id="inputState" class="form-control">
      <!---option value="">Seleccione...</option>
            ?php foreach($roles as $filaRol): { ?>
			 	<option value="?php echo $usuario['IdRol']; ?>">
                    ?php echo $usuario['nombreRol']; ?>
                </option>
            	 ?php
				 }	 ?>

       ?php endforeach; ?--->                  
      </select>

</div>
<div class="form-group">
    <label for="telefono">Telefono</label>
    <input id="telefono" class="form-control" type="text" name="telefono">
</div>
<div class="form-group">
    <label for="correo">Correo Electronico</label>
    <input id="correo" class="form-control" type="text" name="correo">
</div>
<div class="form-group">
    <label for="fnacimiento">Fecha de Nacimiento</label>
    <input id="fnacimiento" class="form-control" type="text" name="fnacimiento">
</div>
<div class="form-group">
    <label for="Contra" >Password </label>
    <input id="contra" class="form-control" type="text" name="contra">
</div>
<div>



</div>
<button class="btn btn-success" type="summit">Guardar</button>
</p>
    </div>
</div>


</form>
<?$pie?>
<?= $this->endSection() ?>
