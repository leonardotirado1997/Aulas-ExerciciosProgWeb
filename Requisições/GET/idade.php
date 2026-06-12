<?php

$idade = $_GET['idade'];

if ($idade >= 18) {
    echo "Sua idade é $idade, então você é maior de idade!";
} else {
    echo "Sua idade é $idade, então você é menor de idade!";
}
