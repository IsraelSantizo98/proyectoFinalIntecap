<?php 
  include 'php/conexion.php';
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $usuario = $_POST['usuario1'];
    $contrasenia = $_POST['contra'];
    if($usuario != "" && $contrasenia != ""){
      $instruc1 = "SELECT * FROM usuario WHERE usuario = '$usuario' and contra = '$contrasenia'";
      $query = mysqli_query($proyecto_Conex, $instruc1);
      while($r = mysqli_fetch_assoc($query)){
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        header ('location: index.php');
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Ingreso Usuario</title>
  </head>
  <body>
    <!-- <img class="wave" src="assets/img/wave.png" /> -->
    <div class="container">
      <div class="imageLeft">
        <img src="assets/img/login3.svg" alt="Imagen de Login a la izquierda">
      </div>
      <div class="containerLogin">
        <form  class="formLogin" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="imageUser">
          <img  src="assets/img/avatar2.svg" alt="">
        </div>
          <h2 class="titleForm">Bienvenido</h2>
          <div class="containerName conta">
            <div class="icon iconName">
              <i class="ico fas fa-user"></i>
            </div>
            <h5>Usuario</h5>
            <input class="inputName input" id="inputForm" type="text" name="usuario1">
          </div>
          <div class="containerPassword conta">
            <div class="icon">
              <i class="ico fas fa-lock"></i>
            </div>
            <h5>Contraseña</h5>
            <input class="inputPassword input" id="inputForm" type="password" name="contra">
          </div>
          <input  type="submit" class="btnSubmit" value="Login" />
        </form>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
<!-- <div class="i">
                <i class="fas fa-user"></i>
              </div>
            <div class="input-div one">
              <div class="i">
                <i class="fas fa-user"></i>
              </div>
              <div class="div">
                <h5>Username</h5>
                <input type="text" class="input" />
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
                <i class="fas fa-lock"></i>
              </div>
              <div class="div">
                <h5>Password</h5>
                <input type="password" class="input" />
              </div>
            </div>
            <a href="#">Forgot Password?</a> -->