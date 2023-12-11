<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');

include('../../layout/admin/sesion.php');
include('../../layout/admin/datos_sesion_user.php');
?>

<?php include ('../../layout/admin/parte1.php');
$id_get = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM tb_libros WHERE id_libro = '$id_get' ");
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
    
}

?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Actualizacion de libro</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="card">
                <div class="card-header" style="background-color: #909090 ;color: #ffffff">
                    Lea bien la informacion antes de enviar
                </div>
                <div class="card-body">
                    <form action="controller_edit.php" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Codigo</label>
                                    <input type="text" name="codigo" class="form-control" value = "<?php echo $codigo; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Titulo</label><span style="color:red"><b>*</b></span>
                                    <input type="text" name="titulo" class="form-control" value = "<?php echo $titulo; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Autor</label><span style="color:red"><b>*</b></span>
                                    <input type="text" name="autor" class="form-control" value = "<?php echo $autor; ?>" >
                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Campo</label><span style="color:red"><b>*</b></span>
                                    <input type="text" name="campo" class="form-control"value = "<?php echo $campo; ?>" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Ciudad</label>
                                    <input type="text" name="ciudad" class="form-control"value = "<?php echo $ciudad; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Editorial</label>
                                    <input type="text" name="editorial" class="form-control"value = "<?php echo $editorial; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Año de publicacion</label><span style="color:red"><b>*</b></span>
                                    <input type="number" name="ano_publicacion" class="form-control" value = "<?php echo $ano_publicacion;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">No. Edicion</label>
                                    <input type="text" name="nro_edicion" class="form-control" value = "<?php echo $nro_edicion;?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Paginas</label><span style="color:red"><b>*</b></span>
                                    <input type="number" name="paginas" class="form-control" value = "<?php echo $paginas;?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Formato</label><span style="color:red"><b>*</b></span>
                                    <select name="formato" id="" class="form-control">
                                     <option value="FISICO">FISICO</option>
                                     <option value="DIGITAL">DIGITAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">No. Ejemplares</label>
                                    <input type="number" name="ejemplares" class="form-control" value = "<?php echo $ejemplares;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Observaciones</label><span style="color:red"><b>*</b></span>
                                    <input type="text" name="observaciones" class="form-control"value = "<?php echo $observaciones;?>" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Codigo de Barra</label><span style="color:red"><b>*</b></span>
                                    <input type="number" name="codigo_barra" class="form-control" value = "<?php echo $codigo_barra;?>">
                                </div>
                            </div>
                        </div>
                        <hr>                        
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <center>
                                    <a href="<?php echo $URL."/admin/";?>" class="btn btn-secondary btn-block">Cancelar</a>
                                </center>
                            </div>
                            <div class="col-md-4">
                               <center>
                                   <button type="submit" onclick="return confirm('Asegurece de llenar la información correctamente');" class="btn btn-dark btn-block">Guardar</button>
                               </center>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
</div>
        </div><!-- /.container-fluid -->
    </div>
</div>
<?php include ('../../layout/admin/parte2.php');?>


<!-- Button trigger modal del area -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>