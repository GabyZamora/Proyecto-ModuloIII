
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

<div class="form-group col-md-4">
                        <label for="inputState">Centro de cómputo</label>
                        <select id="inputState" class="form-control" id="centro" name="centro" size="1">
                            <option value="0">Seleccione...</option>
                            <?php foreach($roles as $rol): ?>
                                <option value="<?=$rol->IdRol?>"><?=$rol->nombreRol?></option>
                            <?php endforeach?>
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
<script>
    $rol = $_GET["rol"];
        switch ($rol){
        case 'mostrar_roles':
     //Llama a tu funcion php
        echo obtener_roles();
        break;
    }

function obtener_roles(){
return "action: ".$_POST['mostrar_roles'];
}
      </script>

<script src="usuario/roles.js"></script>
<?$pie?>
