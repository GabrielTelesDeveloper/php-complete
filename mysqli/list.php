<?php

$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) {
    echo "Error: {$conn->connect_error}";
} else {
    echo 'Conectado com sucesso!';
}

/* Listando os dados vindos do banco de dados */
$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
    /* echo '<pre>';
      var_dump($row);
      echo '</pre>'; */

    array_push($data, $row);
}

echo json_encode($data);
?>
    