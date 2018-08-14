<?php

function trataNome($nome) {

    if (!$nome) {
        throw new Exception("Nenhum nome foi informado<br>", 1);
    }

    echo ucfirst($nome) . "<br>";
}

try {

    trataNome("João");
    trataNome("");
} catch (Exception $e) {

    echo $e->getMessage();
} finally {
    /* Sempre executa o bloco finally */
    /* Pode ser usado para proteger a aplicação */
    echo 'Executou o Try';
}
?>

