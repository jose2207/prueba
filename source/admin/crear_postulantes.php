<?php
include("../../includes/header.php");
?>
<main>
    <div class="container-fluid px-4">

        <?php
            //Condicion para ingresar como postulante o como admin
            if(isset($_SESSION["S_ROL"])){
                echo '<h1 class="my-4">Crear Nuevo Postulante</h1>';
            }else{
                echo '<h1 class="mt-4">Registro De Nuevo Postulante</h1>';
            }
        ?>

        <!--Aqui creamos el formulario para crear un nuevo postulante -->
        <form method="POST" action="guardar_postulantes.php">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">DNI</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_dni" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">nombres</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_nombres" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">apellidos</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_apellidos" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">edad</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_edad" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">correo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_correo" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">telefono</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_telefono" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">direccion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_direccion" require>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <!--Aqui terminamos el formulario para crear un nuevo postulantes -->
</main>
<?php
include("../../includes/footer.php");
?>              