//<?php
//include ('crud-registro/conexion.php');
//$connect = conexion();


//if(!empty($_POST["boton"])){

  
    //if (empty($_POST["email_usuario"]) and empty($_POST["password_usuario"])) {
      //  echo "<script>alert('Por favor ingrese los datos')</script>";
    //} else {
    //$email = $_POST['email_usuario'];
    //$password = $_POST['password_usuario'];
    //$sql = $connect->query ("SELECT * FROM registro WHERE email_usuario='$email' AND password_usuario='$password'");

       // if ($datos = $sql -> fetch_object()) {
           // echo "<script>alert('Has iniciado sesion exitosamente')</script>";
           // header("Location:./iniciocrud.php");
        //} else {
       //     echo "<script>alert('Usuario no encontrado.')</script>";
       // }
   // }
//} //else  {
    //ECHO "<script>alert('NO SE HA PODIDO ENVIAR NADA')</script>";
//}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Iniciar Sesion</title>
</head>
<body class="fondop1">

    <header class="encabezado1">
        <nav id="navegacion-pagina">
                <ul class="menu-navegacion1">
                    <li class="texto-logo"> <img src="img/logo.png" alt="log" class="imagen-logo"><i id="diseño-logo1">SOCKS</i><i id="diseño-logo2">TOMMY</i></li>
                    <li> <a href="view/inicio.php" class="tex-menu2">Inicio</a>  </li>        
                </ul>
            </nav>
        </header>

    <form action="" method="POST" class="formulario1">   
        <?php 
        include('validacion.php');
        ?>
        <h1>Iniciar Sesion</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <img src="img/user.png" class="icon" alt="user" >
                <input type="email" name="email_usuario" id="name" placeholder="Correo Electronico" required>
            </div>

            <div class="input-contenedor">
                <img src="img/pasword.png" class="icon" alt="password" >
                <input type="password" name="password_usuario" id="password" placeholder="Contraseña" required>
            </div>

          <a href="view/inicio.php"> <input type="submit" value="Iniciar Sesion" class="button" name="boton"></a> 
            <br>
            <br>
            <p>Al Iniciar Sesion acepta nuestras condiciones de uso y politica de privacidad.</p>
            <p>¿No tienes cuenta?<a class="link" href="view/registrarse.php">Registrarme</a></p>
        </div>
    </form>
</body>
</html>