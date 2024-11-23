<?php
    include("../../includes/header.php");
    include("../../includes/conectar.php");
    $conexion = conectar();
?>
<main>
     <div class="container-fluid px-4">
            <h1 class="mt-4">Listado de empresas</h1>

            <?php
                $sql="SELECT * FROM empresas"; // SQL para extraer empresas de la base de datos
                $registros=mysqli_query($conexion,$sql); // Ejecuta la SQL

                echo '<button class="btn btn-primary" onClick="f_crear_empresa()" >Crear Empresa</button>';  // boton para crear empresa
                // Tabla para mostrar los registros
                echo '<table class="table table-striped">'; // inicio de tabla html

                // encabezados de tabla 
                echo '<th>Razón Social</th>';
                echo '<th>RUC</th>';
                echo '<th>Telef.</th>';
                echo '<th>Correo Electrónico</th>';
                echo '<th>Dirección</th>';
                echo '<th>Rubro</th>';
                echo '<th>Acciones</th>';
                while($fila=mysqli_fetch_assoc($registros)){  // Bucle para mostrar registroa a registro
                    echo '<tr>'; //Inico de fila
                        echo '<td>'.$fila['razon_social'].'</td>';
                        echo '<td>'.$fila['ruc'].'</td>';
                        echo '<td>'.$fila['telefono'].'</td>';
                        echo '<td>'.$fila['correo'].'</td>';
                        echo '<td>'.$fila['direccion'].'</td>';
                        echo '<td>'.$fila['rubro'].'</td>';

                        echo '<td>';
                            echo '<button class="btn btn-info mx-1" onClick="f_editar_empresa('.$fila['id'].')">Editar</button>';
                            echo '<button class="btn btn-danger mx-1" onClick="f_eliminar_empresa('.$fila['id'].')">Eliminar</button>';
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
    function f_crear_empresa(){
        location.href="crear_empresa.php"
    }

    function f_editar_empresa(idEmpresa){
        location.href="editar_empresa.php?id_empresa=" + idEmpresa;
    }

    function f_eliminar_empresa(idEmpresa){
        if(confirm("Estas seguro de elimar este registro?")){
        location.href="eliminar_empresa.php?id_empresa=" + idEmpresa;
        }else{
            alert("Todo bien, no se ha eliminado nada.");
        }
    }

</script>