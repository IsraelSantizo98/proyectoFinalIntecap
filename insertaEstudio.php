<?php 
include 'php/conexion.php';
$tituloEstudio = $_POST['tituloEstudio'];
$inicioEstudio = $_POST['inicioEstudio'];
$finEstudio = $_POST['finEstudio'];
$gradoEstudio = $_POST['gradoEstudio'];
$porcentaje = $_POST['porcentaje'];
$tipo = $_POST['tipo'];
$categorias = $_POST['categorias'];
$instruc2 = "INSERT INTO actividades VALUES (null, '$tituloEstudio', '$inicioEstudio', '$finEstudio', '$gradoEstudio', '$porcentaje' , '$tipo', '$categorias')";
mysqli_query($proyecto_Conex, $instruc2);
//, 
?>