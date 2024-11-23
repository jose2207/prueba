<?php 
    session_start();
    include("../includes/conectar.php");
    $conexion= conectar();

    //Recibimos el Usuario Y contraseña del Formulario 
    $usuario = $_POST['txt_user'];
    $password = $_POST['txt_password'];
    /*
    echo "Usuario recibido: ". $usuario;
    echo '<br>';
    echo "Contraseña recibida: ". $password;
    */

    $sql="SELECT * FROM usuarios WHERE user='$usuario' AND password='$password' ";
    $resultado=mysqli_query($conexion,$sql);
    $numero_registros = mysqli_affected_rows($conexion);

    //echo $numero_registros;

    if($numero_registros==1){
       // echo "Bienvenido al sistema";
       //Creamos secciones para guardar la identificacion del usuario 'logeado'

       //Creamos un array asociativo con los datos del usuario logeado en '$fila'
       $fila=mysqli_fetch_assoc($resultado);
       $_SESSION["S_USUARIO"]=$fila['user'];
       $_SESSION["S_ROL"]=$fila['rol'];
       header("location: ../index.php");
    }else{
        //echo "Usuario y/o contraseña no reconocido,";
        header("location: ingresar.php?error_ingreso=abc");
    }
?>