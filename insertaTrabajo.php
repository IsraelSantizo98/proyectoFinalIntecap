<?php 
  include 'php/conexion.php';
$nombrePrueba = $_POST['nombrePrueba'];
$fechaIncio = $_POST['fechaIncio'];
$telefonoPrueba = $_POST['telefonoPrueba'];
$instruc1 = "INSERT INTO prueba VALUES (null, '$nombrePrueba', '$fechaIncio', '$telefonoPrueba')";

$insertaTrabajo = mysqli_query($proyecto_Conex, $instruc1);
if($insertaTrabajo){
    //HEADER SE USA PARA REDIRIGIR A OTRA PAGINA
    header('location: notificacion.php?notificacion=1');
  }
  else {
    header('location: notificacion.php?notificacion=2');
  }
?>