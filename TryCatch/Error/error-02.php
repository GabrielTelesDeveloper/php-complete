<?php

/* Sobrescreve o que está no php.ini, podendo fazer a manipulação do erro */
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];
echo $nome;
?>

