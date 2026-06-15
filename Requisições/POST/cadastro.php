<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cursos = $_POST['cursos'];

echo "Bem vindo, $nome" . "<br>";
echo "Seu email é $email" . "<br>";
echo "Sua idade: $idade anos" . "<br>";

if ($cursos == "web") {
    echo "Você se inscreveu no curso Programador Web da instituição SENAC PR";
} else if ($cursos == "sistemas") {
    echo "Você se inscreveu no curso Programador de Sistemas da instituição SENAC PR";
} else {
    echo "Você se inscreveu no curso Instagram para Negócios da instituição SENAC PR";
}