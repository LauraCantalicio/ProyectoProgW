<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$campo = $_POST['campo'];
$ciudad = $_POST['ciudad'];
$editorial = $_POST['editorial'];
$ano_publicacion = $_POST['ano_publicacion'];
$nro_edicion = $_POST['nro_edicion'];
$paginas = $_POST['paginas'];
$formato = $_POST['formato'];
$ejemplares = $_POST['ejemplares'];
$observaciones = $_POST['observaciones'];
$codigo_barra = $_POST['codigo_barra'];

$sentencia = $pdo->prepare('INSERT INTO tb_libros
(titulo,autor,campo,ciudad,editorial,ano_publicacion,nro_edicion,paginas,formato,ejemplares,observaciones,codigo_barra, fyh_creacion, estado)
VALUES (:titulo,:autor,:campo,:ciudad,:editorial,:ano_publicacion,:nro_edicion,:paginas,:formato,:ejemplares,:observaciones,:codigo_barra,:fyh_creacion,:estado)');

$sentencia->bindParam(':titulo',$titulo);
$sentencia->bindParam(':autor',$autor);
$sentencia->bindParam(':campo',$campo);
$sentencia->bindParam(':ciudad',$ciudad);
$sentencia->bindParam(':editorial',$editorial);
$sentencia->bindParam(':ano_publicacion',$ano_publicacion);
$sentencia->bindParam(':nro_edicion',$nro_edicion);
$sentencia->bindParam(':paginas',$paginas);
$sentencia->bindParam(':formato',$formato);
$sentencia->bindParam(':ejemplares',$ejemplares);
$sentencia->bindParam(':observaciones',$observaciones);
$sentencia->bindParam(':codigo_barra',$codigo_barra);
$sentencia->bindParam(':fyh_creacion',$fechaHora);
$sentencia->bindParam(':estado',$estado_del_registro);

if($sentencia->execute()){
echo 'success';
header('Location:' .$URL.'/admin/libros/index.php');
session_start();
$_SESSION['MSJ'] = "SE REGISTRO DE MANERA CORRECTA";
}else{
    session_start();
    $_SESSION['msj']= "Error al registrar en la base de datos";
}

