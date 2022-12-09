<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
require './config/conexion.php';
require './functions/carrito.php';
if (!$_SESSION){
    iniSesion();
}

if (isset($_SESSION) && session__get("user")){
    $con = conexion($db_config);
    $data['code'] = session__get("usuario_anonimo");
    $create = vaciarItem($con, $data);
    destruirSesion();
}
$url = RUTA.'/index.php';
while (ob_get_status())
{
    ob_end_clean();
}
header( "Location: $url" );
exit();