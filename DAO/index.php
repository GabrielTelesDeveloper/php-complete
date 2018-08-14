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
//$autenticar = new Usuario();
//$autenticar->authenticate('fabiana', '2018-08-06');
//echo $autenticar;

/* Insere um novo cliente na base de dados */
//$aluno = new Usuario();
//$aluno->setNome('Aluno');
//$aluno->setDataNascimento('2018-08-06');
//$aluno->insert();
//echo $aluno;

/* Altera determinado cliente previamente cadastrado */
//$update = new Usuario();
//$update->loadById(8);
//$update->update("professor", "0000-00-00");
//echo $update;

/* Removendo dados do banco de dados */
$delete = new Usuario();
$delete->loadById(10);
$delete->delete();
echo $delete;
?>