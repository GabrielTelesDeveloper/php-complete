<?php

/* DAO - Data Access Object */
/* Vantagens:Abstração com o banco de dados, Segurança */

class Sql extends PDO {

    private $conn;

    /* Construtor da classe que inicia a conexão */

    public function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=tst", "root", "");
    }

    /**/

    private function setParams($statement, $parameters = array()) {
        /* Pega a chave e o valor da chave para que faça o bind */
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value) {
        $statement->bindParam($key, $value);
    }

    /* Método responsável por preparar o comando SQL com passagem de parâmetros */

    public function query($rawQuery, $params = array()) {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    /* Retornar Dados */

    public function select($rawQuery, $params = array()): array {
        $stmt = $this->query($rawQuery, $params);

        /* Fazer o FETCH para manipular os dados, que estão associados */
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>

