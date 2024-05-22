<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Agregar</title>
</head>
<body class="fondop2">
 

    <form action="agregar-contacto.php" method="POST" class="formulario">


    <h1>Agregar</h1>

   <div class="contenedor">
    

     
      <div class="input-contenedor">
         <input type="text" name="nom_cliente" id="nom_cliente" placeholder="Nombre" >
      </div>

      <div class="input-contenedor">
         <input type="password" name="contra_cliente"  id="contra_cliente"  placeholder="Contraseña" >
      </div>


      <div class="input-contenedor">
         <input type="number" name="tel_cliente" id="tel_cliente"  placeholder="Numero telefonico"  >
      </div>

      <div class="input-contenedor">
         <input type="text" name="dir_cliente" id="dir_cliente" placeholder="Direccion"  >
      </div>


      <button type="submit" value="Actualizar"  name="submit" value="Registrarme" class="button">Agregar</button>
   


      </div>
    </form>
   </body>
</html>