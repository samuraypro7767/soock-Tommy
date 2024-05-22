

<?php
include "../crud-proveedor/conexion.php";
$connect = conexion();

if (isset($_SESSION['nom_prov'])) {
    header("Location: ../proveedor.php");
}

if (isset($_POST["submit"])) {
   $nom_prov=$_POST['nom_prov'];
   $dir_prov=$_POST['dir_prov'];
   $tel_prov=$_POST['tel_prov'];
   $sumi_prov=$_POST['sumi_prov'];


     
         $sql="INSERT INTO proveedor (nom_prov,dir_prov,tel_prov,sumi_prov) VALUES('$nom_prov','$dir_prov','$tel_prov','$sumi_prov')";
         $resultado= mysqli_query($connect,$sql);

         if($resultado){
            echo "La Información Ingresó correctamente a la Base de Datos";
            header("Location:../proveedor.php");
         }else{
            echo "La Información NO Ingresó  a la Base de Datos";
            header("Location:../proveedor.php");
         }
         

 
      }

?>

