<?php

/* Incluindo o arquivo que está dentro da mesma pasta */
/* Problemas de usar include = quando você faz um include, é copiado o código para a outra página */

/* Diferença entre include e require */

#O require obriga que o arquivo exista e que o arquivo esteja funcionando corretamente, caso contrário, o mesmo dá um erro fatal
#O include tenta funcionar mesmo que o arquivo exista ou que esteja com determinado tipo de problema
#o require_once pega de uma vez só o arquivo, podendo fazer a mesma chamada

/* Include será visto em orientação a objetos */

include './include.php';
//require './include.php';

$resultado = somar(10, 20);
echo "resultado = {$resultado}";
?>
