<?php 
  //Para la seguridad de la pagina para que no cuando no este logeado y tenga la ruta de acceso no pueda ingresar
  session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

  }else{
    header('location: login.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>CV</title>
</head>
<body>
  <div class="container">
    <div class="left">
      <div class="imgContainer">
        <img src="assets/img/user.jpg" alt="Imagen de usuario" width="80%" height="60%">
      </div>
      <h2 class="nameUser">Bienvenido</h2>
      <h2 class="nameUser">Israel Santizo</h2>
      <div class="item verCV">
        <a href="/">Ver mi CV</a>
      </div>
      <nav>
        <details open class="detailsMenu">
          <summary>
            Insertar
          </summary>
        <ul>
          <!-- <div class="item insertar">#2 item</div> -->
          <li ><span onclick="primerForm()">Insertar Trabajo</span></li>
          <li><span onclick="segundoForm()">Insertar Estudios</span></li>
          <li><a href="">Insertar Proyectos</a></li>
          <li><a href="">Insertar Habilidades</a></li>
          <li><a href="">Insertar Lenguajes</a></li>
        </ul>
        </details>
        <details class="detailsMenu">
          <summary>
            Modificar
          </summary>
        <ol>
          <!-- <div class="item insertar">#2 item</div> -->
          <li>Opcion Trabajo</li>
          <li>Opcion Estudios</li>
          <li>Opcion Proyectos</li>
          <li>Opcion Habilidades</li>
          <li>Opcion Lenguajes</li>
        </ol>
        </details>
      </nav>
      <div onclick="primeraImagen()">Insertar trabajo</div>
    </div>
    <div class="right">
      <!-- <a href="php/cerrarSesion.php">Cerrar Sesion</a> -->
      <div class="containerModal" id="container-Modal">
        <div class="contenidoModal">
          <form action="">
            <h3>Ingreso trabajo</h3>
            <div>
              <input type="text" name="nombre" placeholder="Nombre de la Empresa">
            </div>
            <div>
              <input type="text" name="puesto" placeholder="Puesto en la empresa">
            </div>
            <div>
              <input type="date" name="fechaInicio">
            </div>
            <div>
              <input type="date" name="fechaFin" >
            </div>
            <div>
              <input class="submitBtn" type="submit" value="Enviar">
            </div>
          </form>
        </div>
        
      </div>
      <div class="containerModal" id="container-Modal2">
        <div class="contenidoModal">
          <form action="">
            <h3>Ingreso Estudios</h3>
            <div>
              <input type="text" name="nombre" placeholder="Nombre de la Empresa">
            </div>
            <div>
              <input type="text" name="puesto" placeholder="Puesto en la empresa">
            </div>
            <div>
              <input type="date" name="fechaInicio">
            </div>
            <div>
              <input type="date" name="fechaFin" >
            </div>
            <div>
              <input class="submitBtn" type="submit" value="Enviar">
            </div>
          </form>
        </div>
    </div>
  </div>
  <script src="js/main.js"></script>
</body>
</html>