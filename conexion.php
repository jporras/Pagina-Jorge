<?php

function conectar(){
   $user="root";
   $pass="";
   $server="localhost";
   $db="intento";
   $con=mysqli_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysqli_connect_error());

   return $con;
}

?>

