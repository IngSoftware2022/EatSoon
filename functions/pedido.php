<?php
function mostrarPedido($con){
    // $email = $_COOKIE['user'];
    $email = $_SESSION['user'];
    $usuario = $con->prepare("SELECT * FROM usuario WHERE correo = '$email' LIMIT 1");
    $usuario->execute();
    $user = $usuario->fetch(PDO::FETCH_ASSOC);
    $ci= $user['CI'];
    $query = $con->prepare("SELECT * FROM pedido JOIN producto ON (pedido.producto_id_producto=producto.id_producto) WHERE usuario_CI = '$ci'");
        $query->execute();
    return $query->fetchAll();
}