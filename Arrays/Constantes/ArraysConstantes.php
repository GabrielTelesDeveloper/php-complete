<?php

define("SERVER", "127.0.0.1");
echo SERVER;

echo '<br>';

/* Valor da constante sendo um array */
define("BD", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

echo '<pre>';
var_export(BD);
echo '</pre>';

echo PHP_VERSION_ID;
?>


