<?php

    require './config/env.php';

    session_start();
    session_destroy();

    header('Location: '.RUTA);

?>