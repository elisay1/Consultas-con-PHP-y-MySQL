<?php
function Conectarse(){
    $servidor="localhost";
    $basededatos="caso001";
    $usuario="root";
    $clave="";

    $cn=mysqli_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos almacen");
    mysqli_select_db($cn, $basededatos) or die("Error seleccionando la base de datos caso001");
    return $cn;
} 
?>


