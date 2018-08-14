<?php

/* Conexão com banco de dados */
$conn = new PDO("mysql:dbname=test;host=localhost", "root", "");

/* Atualizando um registro já existente */
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin= :LOGIN, dessenha= :PASSWORD WHERE idusuario = :ID");

/* Adicionando os parâmetros */
$login = "tales";
$password = "123456789";
$id = 1;

/* Fazendo o bind para conectar a Query, fazendo a ligação do PARÂMETRO com o VALOR */
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

/* Executando o comando */
$stmt->execute();

echo "Dados alterados com sucesso!";
?>

