<?php
    require './config/env.php';
    require './config/conexion.php';
    require './functions/cuenta.php';

    $con = conexion($db_config);
    
    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $data = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'ci' => $_POST['ci'],
            'direccion' => $_POST['direccion'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'Cpassword' => $_POST['Cpassword']
        ];

        // if($data['password']==$data['Cpassword']){
            
        // }else{
        //     //para mostrar mensaje no crear cuenta
        //     // echo "<script type='text/javascript'>";
        //     // echo "mensajeexito(1)"; 
        //     // echo "</script> ";
        // }

        $create = createUser($con, $data);
        if(!$create){
            header('Location: https://youtube.com');
        }
    }
    
    $title = "Creacion de Cuenta"; // Nombre del title

    $page = './pages/crearCuenta.pages.php';  // Nombre y ruta de la pagina
    require './templates/crearC.template.php'; // Require template
?>