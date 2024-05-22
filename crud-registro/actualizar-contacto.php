<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo-crud2.css">
    
   
    <title>Editar</title>
</head>
<body class="fondop1">
        <!--Consultar la base de datos-->

        <?php 
           include("../crud-registro/conexion.php");
            $connect=conexion();

        $id=$_GET['id_usuario'];
        $sql="SELECT * FROM registro WHERE id_usuario='$id'";
        $query=mysqli_query($connect,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    

       

        <form action="../crud-registro/update-contacto.php" method="POST" class="formulario">


 <h1>Editar Informacion Cliente</h1>

<div class="contenedor">
    <div class="input-contenedor">

    <input type="number" name="id_usuario" value="<?php echo $filas['id_usuario']  ?>" >
    </div>

    <div class="input-contenedor">
        <input type="text" name="name_usuario" value="<?php echo $filas['name_usuario']  ?>" placeholder="Nombre" >
    </div>
    <div class="input-contenedor">
        <input type="email" name="email_usuario" value="<?php echo $filas['email_usuario']  ?>" placeholder="Correo Electronico" >
    </div>

    <div class="input-contenedor">
        <input type="text" name="password_usuario" value="<?php echo $filas['password_usuario']  ?>" placeholder="Contraseña" >
    </div>


    <div class="input-contenedor">
        <input type="number" name="tel_usuario" value="<?php echo $filas['tel_usuario']  ?>" placeholder="Numero telefonico"  >
    </div>

    <button type="submit" value="Actualizar" class="button0">Actualizar</button>
  


</div>
</form>
    
</body>
</html>