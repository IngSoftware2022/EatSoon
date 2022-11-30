<?php

require './config/env.php';
require './config/conexion.php';
require './functions/carrito.php';

$con = conexion($db_config);


/** Verificar si se envio por el metodo POST */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'producto_id' => $_POST['producto_id'],
        'usuario_CI' => null,
        'code' => ""
    ];
    if (!isset($_COOKIE["usuario_anonimo"])) {
        setcookie("usuario_anonimo", getToken(6));
        $data['code'] = $_COOKIE["usuario_anonimo"];
    } else {
        $data['code'] = $_COOKIE["usuario_anonimo"];
    }
    switch ($_POST['action']) {
        case 'agregar':
            $create = agregarAlCarrito($con, $data);
            $message = "";
            if (!$create) {
                $message = "Fallo al añadir a carrito";
            } else {
                $message = "Añadido al carrito";
            }
            break;
        case 'delete':
            $data['carrito_id'] = $_POST['carrito_id'];
            $create = eliminarItem($con, $data);
            $message = "";
            if (!$create) {
                $message = "Fallo al eliminar";
            } else {
                $message = "Añadido al carrito";
            }
            break;
        case 'mas':
            $data['carrito_id'] = $_POST['carrito_id'];
            $create = aumentarItem($con, $data);
            $message = "";

            break;
        case 'menos':
            $data['carrito_id'] = $_POST['carrito_id'];
            $create = desminuirItem($con, $data);
            break;
        case 'vaciar':
            $create = vaciarItem($con, $data);
            break;
        case 'comprar':
            $create = comprarItem($con, $data);
            if (!$create) {
                $message = "Tienes que iniciar session para continuar la su pedido";
                header('Location: crear.php?page=' . $_POST['page'] . '&m=' . $message);
                exit;
            }
            break;
        default:
            # code...
            break;
    }
    header('Location: index.php?page=' . $_POST['page'] . '&m=' . $message);
    exit;
}
header('Location: index.php');
exit;
