<?php
    //Invocamos a conectar.php para tener acceso a al abse de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
    //recibimos el di del postulante para autorizar 
    $id_postulante = $_REQUEST['id_postulante'];

    //sacamos lo datos del postulante a autorizar 
    $sql="SELECT * FROM postulantes WHERE id='$id_postulante'";
    $resultado=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_assoc($resultado);

    $usuario_nuevo=$fila['nombres'];
    $password_nuevo=$fila['dni'];
    //Guardamos estos datos en la tabla 'usuarios'
    $sql_du="INSERT INTO usuarios(user,password,rol) values('$usuario_nuevo','$password_nuevo','3')";
    mysqli_query($conexion,$sql_du);


    //SQL para actualizar a '1' el campo 'autorizado' del portulante
    $sql="UPDATE postulantes SET autorizado='1' WHERE id='$id_postulante'";

    //Ejecutamos la secuencia SQL
    mysqli_query($conexion,$sql);

    //para ver al postulante autorizado, listamos
    header("Location: listar_postulantes.php");