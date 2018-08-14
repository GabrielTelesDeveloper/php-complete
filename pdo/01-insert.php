<?php

/* String de conexão, nome do banco de dados, host, user, password */
$conn = new PDO("mysql:dbname=test;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

/* Adicionando os parâmetros */
$login = "gabriel";
$password = "gabriel";

/* Fazendo o bind para conectar a Query, fazendo a ligação do PARÂMETRO com o VALOR */
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

/* Executando o comando */
$stmt->execute();

echo "Dados inserido com sucesso!";
?>