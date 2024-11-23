<?php
    //Invocamos a conectar.php para tener acceso a al abse de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
?>

<?php

    $id_empresa = $_POST['txt_id_empresa'];

    //recibimos los datos para la actualizacion de la empresa
    $razon       = $_POST['txt_razon_social'];
    $ruc         = $_POST['txt_ruc'];
    $correo      = $_POST['txt_correo'];
    $direccion   = $_POST['txt_direccion'];
    $telefono    = $_POST['txt_telefono'];

    $sql="UPDATE empresas SET razon_social = '$razon',ruc = '$ruc',correo = '$correo',direccion = '$direccion',telefono = '$telefono'
    WHERE id ='$id_empresa'  ";

    //Ejecutamos la secuencia SQL
    mysqli_query($conexion,$sql);

    //redirecionamos al listado de empresas
    //para ver los datos modificados
    header("Location: listar_empresas.php");

?>