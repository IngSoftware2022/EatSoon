<?php

require './config/env.php';
require './config/conexion.php';
require './functions/carrito.php';

$con = conexion($db_config);


/** Verificar si se envio por el metodo POST */
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = [
        'producto_id' => $_POST['producto_id'],
        'usuario_CI'=>null,
        'code' => ""
    ];
    if (!isset($_COOKIE["usuario_anonimo"])){
        setcookie("usuario_anonimo", getToken(6));
        $data['code']=$_COOKIE["usuario_anonimo"];
    }else{
        $data['code']=$_COOKIE["usuario_anonimo"];
    }

    $create = agregarAlCarrito($con, $data);
    $message="";
    if(!$create){
        $message= "Fallo al añadir a carrito";
    }else{
        $message= "Añadido al carrito";
    }
    header('Location: index.php?page='.$_POST['page'].'&m='.$message);
}
header('Location: index.php');

?>