<?php

function conexion() {
$host = "localhost";
$user = "root";
$pass = "";
$db = "socks_tommy";

$connect = mysqli_connect($host, $user, $pass, $db);

return $connect;
}
?>