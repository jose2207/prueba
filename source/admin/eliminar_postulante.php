<?php
    //Invocamos a conectar.php para tener acceso a la base de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
    
    //recibimos el id de la empresa a eliminar
    $id_postulante = $_REQUEST['id_postulante'];

    $SQL = "DELETE FROM postulantes WHERE id='$id_postulante'";

    //Ejecutamos la secuencia SQL
    mysqli_query($conexion, $SQL);

    //redireccionamos al listado de empresas
    //para ver los datos modificados
    header("Location: listar_postulantes.php");
?>