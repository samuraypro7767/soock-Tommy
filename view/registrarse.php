<?php
include "../crud-registro/conexion.php";
$connect = conexion();

if (isset($_SESSION['name_usuario'])) {
    header("Location: ../view/index.php");
}

if (isset($_POST["submit"])) {
    $name = $_POST["name_usuario"];
    $email = $_POST["email_usuario"];
    $password = $_POST["password_usuario"];
    $tel = $_POST["tel_usuario"];
    $cpassword = $_POST["cpassword_usuario"];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM registro WHERE email_usuario='$email'";
        $result = mysqli_query($connect, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO registro (name_usuario,email_usuario, password_usuario,tel_usuario) VALUES ('$name','$email', '$password','$tel')";
            $result = mysqli_query($connect, $sql);

            if ($result) {
                echo "<script>alert('registro exitoso,debes iniciar sesion.')</script>";
                $name = "";
                $email = "";
                $_POST['password_usuario'] = "";
                $_POST['cpassword_usuario'] = "";
                header('location: ../login.php');
            } else {
                echo "<script>alert('Algo salió mal. Inténtalo de nuevo.')</script>";
            }
        } else {
            echo "<script>alert('El correo ya existe.')</script>";
        }
    } else {
        echo "<script>alert('Las contraseñas no coinciden.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Registrame</title>
</head>
<body class="fondop2">
 
    <header class="encabezado1">
        <nav id="navegacion-pagina">
                <ul class="menu-navegacion1">
                    <li class="texto-logo"> <img src="../img/logo.png" alt="log" class="imagen-logo"><i id="diseño-logo1">SOCKS</i><i id="diseño-logo2">TOMMY</i></li>
                    <li> <a href="../view/inicio.php" class="tex-menu2">Inicio</a>  </li>        
                </ul>
            </nav>
        </header>


    <form action="" method="POST" class="formulario">


        <h1>Registrarte</h1>
        
        <div class="contenedor">
            <div class="input-contenedor">
                     <img src="../img/user.png" class="icon" alt="user" >

                <input type="text" name="name_usuario" id="name" placeholder="Nombre Completo" required>
            </div>

            <div class="input-contenedor">
                <img src="../img/gmail.png" class="icon" alt="correo" >
                <input type="email" name="email_usuario" id="email" placeholder="Correo Electronico" required>
            </div>

            <div class="input-contenedor">
                <img src="../img/pasword.png" class="icon" alt="password" >
                <input type="password" name="password_usuario" id="password" placeholder="Contraseña" required>
            </div>

            <div class="input-contenedor">
                <img src="../img/pasword.png" class="icon" alt="password" >
                <input type="password" name="cpassword_usuario" id="password" placeholder="Confirme la Contraseña" required >
            </div>
            <div class="input-contenedor">
                <img src="../img/telephone.png" class="icon" alt="password" >
                <input type="number" name="tel_usuario" id="tel" placeholder="Numero telefonico" required >
            </div>

        <a href="../view/sesion.php">    <input type="submit" name="submit" value="Registrarme" class="button"></a>

            <p class="linea">Al regirtrarse acepta nuestras condiciones de uso y politica de privacidad.</p>
            <p>¿Ya tienes cuenta?<a class="link" href="../view/index.php">Iniciar Sesion</a></p>
        </div>
    </form>
</body>
</html>