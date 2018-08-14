<?php

/* Funciona da seguinte forma, deu certo em um e deu certo em outro -> commit */
/* Funciona da seguinte forma, deu certo e deu errado no outro -> rollBack */
$conn = new PDO("mysql:dbname=test;host=localhost", "root", "");

/* Iniciando a transaction */
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;
$stmt->execute(array($id));

/* RollBack -> Cancela se der errado */
//$conn->rollBack();

/* Commit -> Se der certo executa */
$conn->commit();

echo "Dados excluídos com sucesso!";
?>

