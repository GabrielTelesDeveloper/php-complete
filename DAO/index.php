<?php

require_once 'config.php';

/* Carrega um cliente */
//$gabriel = new Usuario();
//$gabriel->loadById(3);    
//echo $gabriel;

/* Carrega uma lista de clientes */
//$lista = Usuario::getList();
//echo json_encode($lista);

/* Carrega uma lista de clientes por busca */
//$busca = Usuario::search("ga");
//echo json_encode($busca);

/* Autenticação de dados(login), nesse caso, utiliza-se o nome e a data de nascimento do cliente */
$autenticar = new Usuario();
$autenticar->authenticate('fabiana', '2018-08-06');
echo $autenticar;
?>