<?php

/* Manipulando erros */

function error_handler($code, $message, $file, $line) {
    /* Mostrar as informações do erro como arquivo .json (mais fácil para manipular as informações) */

    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "file" => $file,
        "line" => $line
    ));
}

/* Ensinar para o php que ele deve usar a função criada */
set_error_handler("error_handler");

/* Gerando um erro */
php
?>

