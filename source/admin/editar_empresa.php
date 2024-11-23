<?php
    include("../../includes/header.php");
    include("../../includes/conectar.php");
    $conexion = conectar();

    //Recibimos el id de la epresa a modificar
    $id_empresa = $_REQUEST['id_empresa'];
    //echo "se va a modificar la empresa ".$id_empresa;

    //con el id recibido obtenemos los datos de dicha empresa
    //y los mostramos en un formulario para su modificación
    $sql="SELECT * FROM empresas WHERE id='$id_empresa'";
    $resultado=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_assoc($resultado);

?>
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Editar Empresa</h1>
        <form method="POST" action="actualizar_empresa.php">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Razon Social</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_razon_social" required value="<?php echo $fila['razon_social'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">RUC</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_ruc" required value="<?php echo $fila['ruc'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">CORREO</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_correo" required value="<?php echo $fila['correo'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">DIRECCION</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_direccion" required value="<?php echo $fila['direccion'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">TELEFONO</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_telefono" required value="<?php echo $fila['telefono'] ?>">
                </div>
            </div>

            <!--Enviamos de forma oculta el id de empresa para poder recibirla en 
                actualizar_empresa.php Alli se hace una actualziacion correcta -->
            <input type="hidden" value="<?php echo $fila['id']?>" name="txt_id_empresa">

            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>
    </div>
</main>