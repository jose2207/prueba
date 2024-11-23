<?php
    include("includes/header.php");
?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sistema de Ofertas Laborales</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard-BL</li>

                <?php
                    if(isset($_REQUEST['user_public_success'])){
                ?>
                    <div class="alert alert-info" role="alert">
                        Hola <?php echo $_REQUEST['user_public_success'];?>
                        Hemos registrado de forma correcta tus datos.
                        Por favor debes esperar a que un Administrador los autorice y 
                        envie tus datos de acceso a tu correo <?php echo $_REQUEST['user_correo'];?>,
                        o bien nos comunicaremos contigo al celular <?php echo $_REQUEST['user_telefono'];?>
                        <br><br>
                        Gracias por registrar en nuestro Sistema. TQM
                    </div>
                <?php
                }
                ?>
            </ol>
    </main>
<?php
    include("includes/footer.php");
?>