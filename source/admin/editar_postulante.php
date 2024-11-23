<?php
    include("../../includes/header.php");
    include("../../includes/conectar.php");
    $conexion = conectar();

    //Recibimos el id de la epresa a modificar
    $id_postulante = $_REQUEST['id_postulante'];
    //echo "se va a modificar la empresa ".$id_empresa;

    //con el id recibido obtenemos los datos de dicha empresa
    //y los mostramos en un formulario para su modificación
    $sql="SELECT * FROM postulantes WHERE id='$id_postulante'";
    $resultado=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_assoc($resultado);

?>
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Editar Postulante</h1>
        <form method="POST" action="actualizar_postulante.php">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">DNI</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_dni" required value="<?php echo $fila['dni'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_nombres" required value="<?php echo $fila['nombres'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_apellidos" required value="<?php echo $fila['apellidos'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Edad</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_edad" required value="<?php echo $fila['edad'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_correo" required value="<?php echo $fila['correo'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_telefono" required value="<?php echo $fila['telefono'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_direccion" required value="<?php echo $fila['direccion'] ?>">
                </div>
            </div>

            <!--Enviamos de forma oculta el id de postulante para poder recibirla en 
                actualizar_postulantes.php Alli se hace una actualziacion correcta -->
            <input type="hidden" value="<?php echo $fila['id']?>" name="txt_id_postulante">

            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>
    </div>
</main>