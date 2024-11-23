<?php
    //Invocamos a conectar.php para tener acceso a al abse de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
?>

<?php
    //recibimos los datos del formulario
    $razon       = $_POST['txt_razon_social'];
    $ruc         = $_POST['txt_ruc'];
    $correo      = $_POST['txt_correo'];
    $direccion   = $_POST['txt_direccion'];
    $telefono    = $_POST['txt_telefono'];
/*
    echo '<br>', $razon ;
    echo '<br>', $ruc ;
    echo '<br>', $correo  ;
    echo '<br>', $direccion ;
    echo '<br>', $telefono ;
*/

    //sentencia SQL para guardar los datos de la nueva empresa 
    $sql="INSERT INTO empresas (razon_social,ruc,correo,direccion,telefono) 
        VALUES('$razon','$ruc','$correo','$direccion','$telefono')";

    //Ejecutamos la sentencia SQL anterior
    mysqli_query($conexion,$sql);

    //echo "Empresa guardada correctamente.";

    //redirecionamos al listado de empresas
    //para ver la nueva empresa creada
    header("Location: listar_empresas.php");
    
?>
