<?php
/*archivo a  conexion a base de datos */

$server = "localhost";
$user = "root";
$pass = "";
$db = "vidrios";

$conexion = new mysqli ($server, $user, $pass, $db);

    if ($conexion->connect_errno) {
        echo "error de conexion";
        exit ();
    }








/* mala practica
$conexion = new mysqli ("localhost","root","","vidrios");

    if ($conexion->connect_errno) {
        echo "error de conexion";
        exit ();
    }  else{
        echo "si se conecto a la db";
    }
*/


?>