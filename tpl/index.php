<?php

require_once ("vendor/autoload.php");

// Nome
use Rain\Tpl;

// config
$config = array(
    #Nome da pasta onde estará o arquivo (é necessário ser criada)
    "tpl_dir" => "tpl/",
    #Nome da pasta a ser criada para armazenar o marge dos dois arquivos (é necessário ser criada)
    "cache_dir" => "cache/",
        //"debug" => true, // set to false to improve the speed
);

Tpl::configure($config);

// Criando o objeto TPL
$tpl = new Tpl;

// Passando vari�veis para o template
$tpl->assign("name", "Gabriel Teles");
$tpl->assign("version", PHP_VERSION);

/* Passar o nome do arquivo, ao qual o mesmo será gerado */
$tpl->draw("index");
?>

