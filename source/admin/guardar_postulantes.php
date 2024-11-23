<?php
    //Invocamos a conectar.php para tener acceso a la abse de datos 
    include("../../includes/conectar.php");
    $conexion = conectar();
?>

<?php
    //recibimos los datos del formulario
    $DNI        = $_POST['txt_dni'];
    $nombres    = $_POST['txt_nombres'];
    $apellidos  = $_POST['txt_apellidos'];
    $edad       = $_POST['txt_edad'];
    $correo     = $_POST['txt_correo'];
    $telefono   = $_POST['txt_telefono'];
    $direccion  = $_POST['txt_direccion'];

    //sentencia SQL para guardar los datos de la nueva empresa 
    $sql="INSERT INTO postulantes (dni ,nombres ,apellidos ,edad ,correo ,telefono ,direccion) 
        VALUES('$DNI','$nombres','$apellidos','$edad','$correo','$telefono','$direccion')";

    //Ejecutamos la sentencia SQL anterior
    mysqli_query($conexion,$sql);

    if(isset($_SESSION["S_ROL"])){
        header("Location: listar_postulantes.php");
    }else{
        
        // index.php ? clave1=abc & clave2=def & clave3=1123
        header("Location: ../../index.php?user_public_success=$nombres&user_correo=$correo&user_telefono=$telefono");
    }
    
?>
