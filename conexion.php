<?php

$server="localhost";
$user="root";
$pass="";
$schema="intento";

function conectar(){
   $dbc = new mysqli($server,$user,$pass,$schema);
   if ($dbc->connect_errno){
		return false;
	}else{
		return $dbc;
	}
}

?>

