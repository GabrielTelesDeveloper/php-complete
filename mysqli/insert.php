<?php

/* IP,user,senha,banco de dados */

$conn = new mysqli("localhost", "root", "", "test");

/* Tratamento de erros */

if ($conn->connect_error) {
    echo "Error: {$conn->connect_error}";
} else {
    echo 'Conectado com sucesso!';
}

/* Inserindo dados no banco de dados */
$stm = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?,?)");
$stm->bind_param("ss", $login, $pass);
$login = "user";
$pass = "@##@";
$stm->execute();

$login = "telin";
$senha = "biel";
$stm->execute();
?>