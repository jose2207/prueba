<?php
include("../../includes/header.php");
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Crear Nueva Empresa</h1>
        <!--Aqui creamos el formulario para crear una nueva empresa -->
        <form method="POST" action="guardar_empresa.php">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Razon Social</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_ruc" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">RUC</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_ruc" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_correo" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_direccion" require>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  name="txt_telefono" require>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <!--Aqui terminamos el formulario para crear una nueva empresa -->
</main>
<?php
include("../../includes/footer.php");
?>              
  