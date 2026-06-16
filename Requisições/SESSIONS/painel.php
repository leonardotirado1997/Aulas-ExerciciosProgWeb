<?php

session_start();

if(!isset($_SESSION['usuario'])){

    echo "Acesso negado";
    exit;

}

echo "Bem-vindo ao sistema";

?>