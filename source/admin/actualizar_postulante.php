<?php
    //Invocamos a conectar.php para tener acceso a al abse de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
?>

<?php

    $id_postulante = $_POST['txt_id_postulante'];

    //recibimos los datos para la actualizacion de la empresa
    $dni       = $_POST['txt_dni'];
    $nombres   = $_POST['txt_nombres'];
    $apellidos = $_POST['txt_apellidos'];
    $edad      = $_POST['txt_edad'];
    $correo    = $_POST['txt_correo'];
    $telefono  = $_POST['txt_telefono'];
    $direccion = $_POST['txt_direccion'];

    $sql="UPDATE postulantes SET dni = '$dni',nombres = '$nombres',apellidos = '$apellidos',edad = '$edad',correo = '$correo',telefono = '$telefono',direccion = '$direccion'
    WHERE id ='$id_postulante'  ";

    //Ejecutamos la secuencia SQL
    mysqli_query($conexion,$sql);

    //redirecionamos al listado de empresas
    //para ver los datos modificados
    header("Location: listar_postulantes.php");
