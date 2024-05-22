<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo-crud1.css">
    <link rel="stylesheet" href="css/estilo-crud3.css">
    <title>Usuario</title>

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
                    <li> <a href="view/inicio.php" class="tex-menu1"><img src="img/house.png" alt=""width="30" height="30"> </a>  </li>
                    <li> <a href="producto.php" class="tex-menu1">Productos</a>  </li>
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

                
               <button class="button0"> <a href="crud-cliente/formulario-agregar-contacto.php">Agregar Contacto</a></button>
                
                
                <div id="buscador">
                        <form action="crud-cliente/consultar-contacto.php" method="POST" class="formulario-inicio">
                        <input type="text" id="navegador-bus"  name="id_cliente" placeholder="Digite  id">
                        <button type="submit" class="button0" value="Consultar">Consultar </button>
                        <button type="reset" class="button0" value="Limpiar">Limpiar    </button>                  
                        </form>
                                        
                                        
                </div>
        </div>

     
    <table>
             <thead>
                      <tr>
                             <th>id</th>
                             <th>Nombre</th>
                              <th>contraseñas</th>
                             <th>Telefono</th>
                             <th>Direccion</th>
                             
                              

                             
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
    include("crud-cliente/conexion.php");
    $connect=conexion();
    $sql= "SELECT* FROM cliente";
    $resultado=mysqli_query($connect,$sql);
?>
<tbody>
    <?php
    $filas=mysqli_fetch_assoc($resultado);
    ?>
    <tr>
        <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?> </td>
        <td><?php echo $filas ['tel_cliente'] ?> </td>
        <td><?php echo $filas ['dir_cliente'] ?> </td>
    
     
  
        <td> <a href="crud-cliente/actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-cliente/delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion"> Eliminar</a></td>
    </tr>

</tbody>

<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?> </td>
        <td><?php echo $filas ['tel_cliente'] ?> </td>
        <td><?php echo $filas ['dir_cliente'] ?> </td>
      
     
  
        <td> <a href="crud-cliente/actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-cliente/delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion"> Eliminar</a></td>
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
    <title>CRUD-cliente REGISTRO</title>
    <link rel="stylesheet" href="css/estilo-crud2.css">


   
    
    
</head>
<body>


    
</body>
</html>


    



