<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo-crud1.css">
    <link rel="stylesheet" href="css/estilo-crud3.css">
    <title>Producto</title>

</head>
<body class="fondo-productos">
<?php
 //Iniciamos Sesión en el Servidor
 session_start();
 //Se valida si el usuario inicia sesión para permitir el ingreso al CRUD

 if(empty($_SESSION["email_usuario"])){
        header("location: ./login.php");
 } 
 ?> 

<header class="encabezado">
        <nav id="navegacion-pagina">
                <ul class="menu-navegacion">
                    <li class="texto-logo"> <img src="img/logo.png" alt="log" class="imagen-logo"><i id="diseño-logo1">SOCKS</i><i id="diseño-logo2">TOMMY</i></li>
                 
                    <li> <a href="iniciocrud.php" class="tex-menu1">Registro</a>  </li>
                    <li> <a href="usuariocrud.php" class="tex-menu1">Usuario</a>  </li>
                    <li> <a href="view/inicio.php" class="tex-menu1"><img src="img/house.png" alt="" width="30" height="30"></a>  </li>
                    <li> <a href="proveedor.php" class="tex-menu1">Proveedor</a>  </li>
                    <li> <a href="categoria.php" class="tex-menu1">Categoria</a>  </li>
                   
                </ul>
            </nav>
        </header>
 
       
         <!--Botón de Enlace al Formulario para agregar un Contacto -->
         <div id="buscardor">

         <div class="salida">
     <a href="./cerrarsesion.php"><img src="img/salir.png" alt="" height="50"></a>
    </div>

                
               <button class="button0"> <a href="crud-producto/formulario-agregar-contacto.php">Agregar Contacto</a></button>
                
                
                <div id="buscador">
                        <form action="crud-producto/consultar-contacto.php" method="POST" class="formulario-inicio">
                        <input type="text" id="navegador-bus"  name="cod_prod" placeholder="Digite cod producto">
                        <button type="submit" class="button0" value="Consultar">Consultar </button>
                        <button type="reset" class="button0" value="Limpiar">Limpiar    </button>                  
                        </form>
                                        
                                        
                </div>
        </div>

     
    <table>
             <thead>
                      <tr>
                             <th>Codigo</th>
                             <th>Nombre Producto</th>
                              <th>Precio</th>
                             <th>Descripcion</th>
                             <th>Descuento en %</th>
                             
                              

                             
                             <th colspan="2">Acciones BD</th>
                             
                      </tr>
             </thead> 
             <Tbody>
                      </tr>

                      </tr>        
            </tbody>
      
      
     



 </body>
</html>
<?php
    include("crud-producto/conexion.php");
    $connect=conexion();
    $sql= "SELECT* FROM producto";
    $resultado=mysqli_query($connect,$sql);
?>
<tbody>
    <?php
    $filas=mysqli_fetch_assoc($resultado);
    ?>
    <tr>
        <td><?php echo $filas ['cod_prod'] ?> </td>
        <td><?php echo $filas ['nom_prod'] ?> </td>
        <td><?php echo $filas ['prec_prod'] ?> </td>
        <td><?php echo $filas ['desc_prod'] ?> </td>
        <td><?php echo $filas ['descuento_prod'] ?> </td>
    
     
  
        <td> <a href="crud-producto/actualizar-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-producto/delete-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion"> Eliminar</a></td>
    </tr>

</tbody>

<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td><?php echo $filas ['cod_prod'] ?> </td>
        <td><?php echo $filas ['nom_prod'] ?> </td>
        <td><?php echo $filas ['prec_prod'] ?> </td>
        <td><?php echo $filas ['desc_prod'] ?> </td>
        <td><?php echo $filas ['descuento_prod'] ?> </td>
    
     
  
        <td> <a href="crud-producto/actualizar-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-producto/delete-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion"> Eliminar</a></td>
    </tr>
        <?php
    }
        ?>
</tbody>
</table>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crud Producto</title>
    <link rel="stylesheet" href="css/estilo-crud2.css">
   
 
    
</head>
<body>


    
</body>
</html>


    



