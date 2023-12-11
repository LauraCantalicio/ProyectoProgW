<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');

include('../../layout/admin/sesion.php');
include('../../layout/admin/datos_sesion_user.php');
?>

<?php include ('../../layout/admin/parte1.php');?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Libros</h1>
                    <?php
                    if(isset($_SESSION['msj'])){
                        $respuesta = $_SESSION['msj']; ?>
                        <script>
                            Swal.fire(
                                'Exito!',
                                '<?php echo $respuesta; ?>',
                                'success'
                            )
                        </script>
                    <?php
                        unset($_SESSION['msj']);
                    }
                    ?>
                    <br>
                    <div class="card card-purple">
                        <div class="card-header">
                            Libros
                        </div>
                        <div class="card-body">

                            <script>
                                $(document).ready(function() {
                                    $('#tabla-1').DataTable( {
                                        "pageLength": 5,
                                        "language": {
                                            "emptyTable": "No hay información",
                                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Libros",
                                            "infoEmpty": "Mostrando 0 a 0 de 0 Libros",
                                            "infoFiltered": "(Filtrado de _MAX_ total Libros)",
                                            "infoPostFix": "",
                                            "thousands": ",",
                                            "lengthMenu": "Mostrar _MENU_ Libros",
                                            "loadingRecords": "Cargando...",
                                            "processing": "Procesando...",
                                            "search": "Buscador:",
                                            "zeroRecords": "Sin resultados encontrados",
                                            "paginate": {
                                                "first": "Primero",
                                                "last": "Ultimo",
                                                "next": "Siguiente",
                                                "previous": "Anterior"
                                            }
                                        }
                                    });
                                } );
                            </script>

                            <div class="table-responsive">
                             
                             <table id="tabla-1" class="table table-striped table-hover table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Codigo</th>
                                    <th>Titulo</th>
                                    <th>Autor</th>
                                    <th>Area</th>
                                    <th>Campo</th>
                                    <th>Ciudad</th>
                                    <th>Editorial</th>
                                    <th>Año de publicacion</th>
                                    <th>Año de edicion</th>
                                    <th>Numero de paginas</th>
                                    <th>Formato</th>
                                    <th>Ejemplares</th>
                                    <th>Observaciones</th>
                                    <th>Codigo de Barra</th>
                                    <th><center> Acciones</center></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                $query = $pdo->prepare('SELECT * FROM tb_libros WHERE estado = "1" ');
                                $query->execute();
                                $libros = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($libros as $libro){
                                     $id_libros = $libro['id_libro'];
                                     $codigo = $libro['codigo'];
                                     $titulo = $libro['titulo'];
                                     $autor = $libro['autor'];
                                     $campo = $libro['campo'];
                                     $ciudad = $libro['ciudad'];
                                     $editorial = $libro['editorial'];
                                     $ano_publicacion = $libro['ano_publicacion'];
                                     $nro_edicion = $libro['nro_edicion'];
                                     $paginas = $libro['paginas'];
                                     $formato = $libro['formato'];
                                      $ejemplares = $libro['ejemplares'];
                                      $observaciones = $libro['observaciones'];
                                      $codigo_barra = $libro['codigo_barra'];
                                      $numeroDeVeces = 1;
                                      $rutaDeImagen = 'public/dist/img/frontal.png'; 
                                      }
                                      foreach ($libros as $libro) {
                                        echo "<tr>";
                                        $contador = $contador + 1; 
                                        echo "<td>" . $contador . "</td>";
                                        echo "<td>" . $libro['codigo'] . "</td>";
                                        echo "<td>" . $libro['titulo'] . "</td>";
                                        echo "<td>" . $libro['autor'] . "</td>";
                                        echo "<td>" . "</td>";
                                        echo "<td>" . $libro['campo'] . "</td>";
                                        echo "<td>" . "</td>";
                                        echo "<td>" . $libro['editorial'] . "</td>";
                                        echo "<td>" . $libro['ano_publicacion'] . "</td>";
                                        echo "<td>" . $libro['nro_edicion'] . "</td>";
                                        echo "<td>" . $libro['paginas'] . "</td>";
                                        echo "<td>" . $libro['formato'] . "</td>";
                                        echo "<td>" . $libro['ejemplares'] . "</td>";
                                        echo "<td>" . $libro['observaciones'] . "</td>";
                                        echo "<td>" . $libro['codigo_barra'] . "</td>";
                                        echo "<td><img src='" . $rutaDeImagen . "' alt='Imagen'></td>";
                                        echo "</tr>";
                                    }
                                    ?>


                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
<?php include ('../../layout/admin/parte2.php');?>
