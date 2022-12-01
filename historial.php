<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
require './config/conexion.php';
require './functions/product.php';
require './functions/carrito.php';
if (!$_SESSION){
    iniSesion();
}
$title = "Historial"; // Nombre del title
$enCarrito = [];
$contadorCarrito = 0;
if ($_SESSION['usuario_anonimo']!=null) {
   $contadorCarrito = totalProductosEnCarrito($con, ['code' => session__get("usuario_anonimo")]);
   $enCarrito = enCarrito($con, ['code' => session__get("usuario_anonimo")]);
}
$header='./templates/header.template.php';
$page = './pages/historial-compras.page.php'; // Nombre y ruta de la pagina
require './templates/homeUsuarioCreado.template.php'; // Require template

exit();
?>