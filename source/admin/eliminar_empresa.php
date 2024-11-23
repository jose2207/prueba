<?php
    //Invocamos a conectar.php para tener acceso a la base de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
    
    //recibimos el id de la empresa a eliminar
    $id_empresa = $_REQUEST['id_empresa'];

    $SQL = "DELETE FROM empresas WHERE id='$id_empresa'";

    //Ejecutamos la secuencia SQL
    mysqli_query($conexion, $SQL);

    //redireccionamos al listado de empresas
    //para ver los datos modificados
    header("Location: listar_empresas.php");
?>