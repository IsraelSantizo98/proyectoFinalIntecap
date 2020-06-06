<?php 
  include 'php/conexion.php';
  session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  }else{
    header('location: login.php');
    exit;
  }
  $varNombre = $_SESSION['usuario'];
  //Para la seguridad de la pagina para que no cuando no este logeado y tenga la ruta de acceso no pueda ingresar
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
  <script src="https://kit.fontawesome.com/9618200a61.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  <title>CV</title>
</head>
<body>
  <section class="headerSection">
    <div class="header">    
    </div>
  </section>
  <section class="main">
    <div class="container">
      <div class="left">
        <div class="imgContainer">
          <img class="imgUser"src="assets/img/user.jpg" alt="Imagen de usuario">
          
        </div>
        <div class="item verCV">
          <a href="cv.php">Ver mi CV </a>
          <div><i class="ico fa fa-address-card-o" aria-hidden="true"></i></div>
        </div>
        <nav>
          <details open class="detailsMenu">
            
                <summary>
                  Insertar
                  <i class="icoMenu fa fa-file-text" aria-hidden="true"></i>
                </summary>
          <ul>
            <!-- <div class="item insertar">#2 item</div> -->
            <li><span onclick="primerForm()">Insertar Trabajo</span></li>
            <li><span onclick="segundoForm()">Insertar Estudios</span></li>
            <li><a href="">Insertar Proyectos</a></li>
            <li><a href="">Insertar Habilidades</a></li>
            <li><a href="">Insertar Lenguajes</a></li>
          </ul>
          </details>
          <details class="detailsMenu">
            <summary>
              Modificar
              <i class="icoMenu fa fa-pencil-square" aria-hidden="true"></i>
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
      </div>
      <div class="right">
        <a href="php/cerrarSesion.php"><i class="icon fa fa-sign-out" aria-hidden="true"></i></a>
        <h2 class="titleContainer" id="title-Container">Bienvenido <?php echo $varNombre ?></h2>
        <div class="containerModal" id="container-Modal">
          <div class="contenidoModal">
            <form action="insertaTrabajo.php" method="POST">
              <h3>Ingreso Trabajo</h3>
                <input type="text" name="nombrePrueba" placeholder="Nombre completo">
                <input type="date" name="fechaIncio">
                <input type="number" name="telefonoPrueba" placeholder="Telefono">
                <input type="submit" class="submitBtn" value="Enviar datos">
            </form>
          </div>
        </div>
        <div class="containerModal" id="container-Modal2">
          <div class="contenidoModal">
            <form action="insertaEstudio.php" method="POST">
              <h3>Ingreso Estudios</h3>
              <input type="text" name="tituloEstudio" placeholder="Colegio">
              <input type="text" name="gradoEstudio" placeholder="Su estudio">
              <input type="date" name="inicioEstudio">
              <input type="date" name="finEstudio">
              <input type="number" name="porcentaje" placeholder="Porcentaje">
              <input type="text" name="tipo" placeholder="Tipo"><br>
              <select name="categorias" id="">
                <?php 
                  $instruct2 = "SELECT * FROM usuario";
                  $query2 = mysqli_query($proyecto_Conex,$instruct2);
                    while($r = mysqli_fetch_assoc($query2)){
                    echo "<option value='".$r['idUsuario']."'>".$r['usuario']."</option>";
                    }
                ?>
              </select>
              <input class="submitBtn" type="submit" value="Enviar">
            </form>
          </div>
      </div>
    </div>
  </section>
  <div class="footer">
    <span>Diseñado por <a href="https://www.instagram.com/israel_santos98/" target="_blank">@israel_santizo98</a></span>
  </div>
  <script src="js/main.js"></script>
</body>
</html>
<!-- <i class="fa fa-floppy-o" aria-hidden="true"></i> -->
<!-- <i class="fa fa-suitcase" aria-hidden="true"></i> -->