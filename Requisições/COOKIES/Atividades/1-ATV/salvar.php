<?php

$nome = $_POST['nome'];

// Criando Cookie por 1 hora.
setcookie("usuario", $nome, time() + 3600);

// Redirenciona para a pagina bemVindo.php
header("Location: bemVindo.php");
exit();