<?php
    include("../includes/header.php");
    include("../includes/conectar.php");
    $conex = conectar();
?>
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Acceso al sistema</h1>
                            <!-- Inicio del formulario -->

<form method="POST" action="login.php" >
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="txt_user">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="txt_password">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
    </div>
  </div>

     <?php
        if(isset($_REQUEST['error_ingreso'])){     
    ?>
        <div class="alert alert-danger" role="alert">
        Error, Datos no reconocidos
        </div>
    <?php
        }
    ?>

  <button type="submit" class="btn btn-success">Ingresar</button>
</form>
                            <!-- Fin del formulario -->

                    </main>
<?php
    include("../includes/footer.php");
?>
