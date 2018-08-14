<?php

/* O importante é passar o $dns: que é o tipo do sistema gerenciador de banco de dados */
$conn = new PDO("mysql:dbname=test;host=localhost", "root", "");

$statement = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>{$key}</strong>: {$value}<br>";
    }
    echo "========================================<br>";
}
?>
