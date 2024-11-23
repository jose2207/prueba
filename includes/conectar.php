<?php
    //En este archivo vamos a realizar a la B.D.
    include("config.php");

    //funcion para conectarnos a la B.D
    function conectar(){
        $link = new mysqli (SERVER,DB_USER,DB_PASS,DB_NAME); //Esta linea conecta a la B.D 
        if( $link->connect_errno){
            echo "Error, no se ha podido conectar a al B.D.";
        }else{
            
            return $link;
        }
    }
?>