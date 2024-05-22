<!--Actualizar la base de datos-->
<?php

include("../crud-proveedor/conexion.php");
$connect=conexion();

$id_prov=$_POST['id_prov'];
$nom_prov=$_POST['nom_prov'];
$dir_prov=$_POST['dir_prov'];
$tel_prov=$_POST['tel_prov'];
$sumi_prov=$_POST['sumi_prov'];


$sql="UPDATE proveedor SET  nom_prov='$nom_prov',
dir_prov='$dir_prov', tel_prov='$tel_prov',sumi_prov='$sumi_prov' WHERE id_prov='$id_prov'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../proveedor.php");
    }
    else{
        echo "no se pudo";
    }
?>