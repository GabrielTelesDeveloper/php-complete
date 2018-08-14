<?php

/* Não use DELETE sem WHERE */

/* String de conexão, nome do banco de dados, host, user, password */
$conn = new PDO("mysql:dbname=test;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

/* Adicionando os parâmetros */
$id = 3;

/* Fazendo o bind para conectar a Query, fazendo a ligação do PARÂMETRO com o VALOR */
$stmt->bindParam(":ID", $id);

/* Executando o comando */
$stmt->execute();

echo "Dados excluídos com sucesso!";
?>