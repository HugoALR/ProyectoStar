<?php
//iniciando sesion
session_start();
//Estructura parametros BD funcion Connect Ip,User, password, BD 
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud'
) or die(mysqli_error($mysqli));

//Comprobacion: si existe el objeto de conexion, indicara que la Bd se conecto correctamente
/*
if (isset($conn)){
    echo 'DB is connected';
}
*/
?>
