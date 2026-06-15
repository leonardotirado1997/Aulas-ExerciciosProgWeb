<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == 'admin' && $senha == 1234) {
    echo "Login realizado com sucesso" . "<br>";
    echo "Bem Vindo, $login!";
} else {
    echo "Usuário ou senha incorretos!";
}
