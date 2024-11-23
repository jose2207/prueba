<?php
    include("../../includes/header.php");
    include("../../includes/conectar.php");
    $conexion = conectar();
?>
<main>
     <div class="container-fluid px-4">
            <h1 class="mt-4">Listado de Postulantes</h1>

            <?php
                $sql="SELECT * FROM postulantes"; // SQL para extraer postuantes de la base de datos
                $registros=mysqli_query($conexion,$sql); // Ejecuta la SQL

                echo '<button class="btn btn-primary" onClick="f_crear_postulantes()" >Crear_postulantes</button>';  // boton para crear postulantes
                // Tabla para mostrar los registros
                echo '<table class="table table-striped">'; // inicio de tabla html

                // encabezados de tabla 
                echo '<th>DNI</th>';
                echo '<th>Nombres</th>';
                echo '<th>Apellidos</th>';
                echo '<th>Edad</th>';
                echo '<th>Correo</th>';
                echo '<th>Telefono</th>';
                echo '<th>Direccion</th>';
                echo '<th>Autorizado</th>';
                echo '<th>Acciones</th>';
                while($fila=mysqli_fetch_assoc($registros)){  // Bucle para mostrar registroa a registro
                    echo '<tr>'; //Inico de fila
                        echo '<td>'.$fila['dni'].'</td>';
                        echo '<td>'.$fila['nombres'].'</td>';
                        echo '<td>'.$fila['apellidos'].'</td>';
                        echo '<td>'.$fila['edad'].'</td>';
                        echo '<td>'.$fila['correo'].'</td>';
                        echo '<td>'.$fila['telefono'].'</td>';
                        echo '<td>'.$fila['direccion'].'</td>';
                        echo '<td>'.$fila['autorizado'].'</td>';

                        echo '<td>';
                        echo '<button class="btn btn-info mx-1" onClick="f_editar_postulante('.$fila['id'].')">Editar</button>';
                        echo '<button class="btn btn-danger mx-1" onClick="f_eliminar_postulante('.$fila['id'].')">Eliminar</button>';
                        echo '<button class="btn btn-success mx-1" onClick="f_autorizar_postulante('.$fila['id'].')">Autorizar</button>';
                        echo '</td>';

                    echo '</tr>'; //fin de fila
                }
                echo '</table>';//fin de tabla html
            ?>
    </div>
</main>
<?php
    include("../../includes/footer.php");
?>

<script>
    function f_crear_postulantes(){
        location.href="crear_postulantes.php"
    }

    function f_editar_postulante(idPostulante){
        location.href="editar_postulante.php?id_postulante=" + idPostulante;
    }
    

    function f_eliminar_postulante(idPostulante){
        if(confirm("Estas seguro de elimar este registro?")){
        location.href="eliminar_postulante.php?id_postulante=" + idPostulante;
        }else{
            alert("Todo bien, no se ha eliminado nada.");
        }
    }

    function f_autorizar_postulante(idPostulante){
        if(confirm("Estas seguro de autorizar este registro?")){
        location.href="autorizar_postulante.php?id_postulante=" + idPostulante;
        }
    }

</script>