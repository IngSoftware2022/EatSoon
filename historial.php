<?php

require './config/env.php';
require './config/conexion.php';
require './functions/product.php';
require './functions/carrito.php';


$title = "Historial"; // Nombre del title

$enCarrito = [];
$contadorCarrito = 0;
if (isset($_COOKIE["usuario_anonimo"])) {
    $contadorCarrito = totalProductosEnCarrito($con, ['code' => $_COOKIE["usuario_anonimo"]]);
    $enCarrito = enCarrito($con, ['code' => $_COOKIE["usuario_anonimo"]]);
}

$page = './pages/historial-compras.page.php'; // Nombre y ruta de la pagina
require './templates/homeUsuarioCreado.template.php'; // Require template

?>