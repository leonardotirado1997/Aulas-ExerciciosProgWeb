<?php

$cor = $_GET['cor'];

setcookie("tema", $cor, time() + 3600);

header("Location: index.php");
