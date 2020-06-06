<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/insertar.css">
  <title>Notificacion</title>
</head>
<body>
  <?php 
    $notificacion = $_GET['notificacion'];
    if ($notificacion == 1) {
      echo "
      <div class='fondoContenido'>
        <div class='contenido'>
        <div class='container'>
        <h1 id='exito'>Exito</h1>
        <p class='mensaje'>Se ingreso correctamente!</p>
        <a href='index.php' class='btnAceptar'>Aceptar</a>
        </div>
        </div>
      </div>";
    }
    else if($notificacion ==2){
      echo "
      <div class='fondoContenido'>
        <div class='contenido'>
        <div class='container'>
        <h1 id='exito'>Fallido</h1>
        <p class='mensaje'>Ocurrio un error, intentelo nuevamente</p>
        <a href='index.php' class='btnAceptar'>Aceptar</a>
        </div>
        </div>
      </div>";
    }
  ?>
</body>
</html>