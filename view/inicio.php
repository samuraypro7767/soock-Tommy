<?php
include "../crud-registro/conexion.php";
$connect = conexion();

if (isset($_SESSION['name'])) {
    header("Location: ../view/inicio.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>SOCKS TOMMY</title>
</head>
<body class="fondo-inicio">
    <header class="encabezado">
    <nav id="navegacion-pagina">
            <ul class="menu-navegacion">
                <li class="texto-logo"> <img src="../img/logo.png" alt="log" class="imagen-logo"><i id="diseño-logo1">SOCKS</i><i id="diseño-logo2">TOMMY</i></li>
             
                <li> <a href="../view/index.php" class="tex-menu1">Iniciar Sesion</a>  </li>
                
                <li><a href="../view/registrarse.php" class="tex-menu">Registrarme</a></li>
                
            
            </ul>
        </nav>
    </header>
    <section id="capa-inicio">
    <main id="titulo-body">SOCKS TOMMY</main>
    <div class="container__slider">

        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <input type="radio" name="slider" id="item-4">
        
    
            <div class="cards">
                <label class="card" for="item-1" id="selector-1">
                    <img src="../img/producto1.jpeg">
                </label>
                <label class="card" for="item-2" id="selector-2">
                    <img src="../img/producto2.jpeg">
                </label>
                <label class="card" for="item-3" id="selector-3">
                    <img src="../img/producto3.jpeg">
                </label>
                <label class="card" for="item-4" id="selector-4">
                    <img src="../img/producto4.jpeg">
                </label>

    
            </div>
        </div>
    
    </div>

        <main class="container-direccion">
            <section class="article1">
            <h2 class="titulo-link">Nosotros</h2>
                <img src="../img/we.png" alt="nosotros" width="190" height="150" class="img-conten1">

                <article class="texto-direccion"> <p >Somos un equipo apasionado y comprometido en brindar soluciones innovadoras a nuestros clientes. Nuestra dedicación y experiencia nos impulsan a alcanzar el éxito juntos.</p></article>  
                <button class="boton1"> <a href="../view/nosotros.php">Ver Contenido</a></button>
            </section>

            <section class="article1">
                <h2 class="titulo-link">Productos</h2>
                <img src="../img/productos c.png" alt="productos" width="150" height="150" class="img-conten1">

             <article class="texto-direccion"> <p >
                Nuestros productos son sinónimo de calidad y excelencia, diseñados para satisfacer las necesidades más exigentes. Descubre una amplia gama de opciones que te sorprenderán.</p></article>  
                <button class="boton1"> <a href="../view/productos.php">Ver Productos</a></button >
            </section>

        </main>
  

        <footer>
            <div class="pie-conter1">
                <h3 class="titulo-pie2">CONTACTENOS</h3>
              <a href="https://w.app/0dEDeI"> <img src="../img/red1.png" alt="whatssap" class="imagen-pie-pagina"></a> 
              <a href="https://instagram.com/socks_tommy_10?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><img src="../img/red2.png" alt="Instagram" class="imagen-pie-pagina"></a>
              <a href="mailto:sockst62@gmail.com"><img src="../img/red4.png" alt="Gmail" class="imagen-pie-pagina"></a> 
            </div>
            <main class="horarios-pie">
                <h3 class="titulo-pie1">HORARIO ATENCION</h3>
                    <p>
                        -luanes a viernes <br>
                        7:00 AM  hasta 9:00 PM </p>
               </main>

                   <div class="titulopie3"><h3 class="titulo-pie3"> © 2023 SOCKS TOMMY - Todos los derechos reservados. </h3></div>
                     
                
        </footer>
        
    </section>
</body>
</html>


