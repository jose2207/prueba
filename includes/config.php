<?php
    //Definimos constantes de nuestro sistema

    if(!defined("TITULO_GENERAL")) define("TITULO_GENERAL","Sistema de Bolsa lavoral Ver. 1.0");

    //Ahora creamos las constantes para conectarnos a la Base de datos 

    if(!defined("SERVER")) define("SERVER","localhost");
    if(!defined("DB_NAME")) define("DB_NAME","bd_ofertas");
    if(!defined("DB_USER")) define("DB_USER","root");
    if(!defined("DB_PASS")) define("DB_PASS","");

    //Creamos una constante que apunta a la direccion url de nuestro sistema 
    if(!defined("RUTA_GENERAL")) define("RUTA_GENERAL","http://localhost/ofertas/");
        
    


?>