<?php

class Usuario {

    private $idcliente;
    private $nome;
    private $dataNascimento;
    private $dataCadastro;

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setIdcliente($value) {
        $this->idcliente = $value;
    }

    function getNome() {
        return $this->nome;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    /* Função que carrega os dados por id */

    public function loadById($id) {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_cliente WHERE idcliente = :ID", array(
            ":ID" => $id
        ));

        if (count($result) > 0) {
            $row = $result[0];
            $this->setIdcliente($row['idcliente']);
            $this->setNome($row['nome']);
            $this->setDataNascimento($row['dataNascimento']);
            $this->setDataCadastro(new DateTime($row['dataCadastro']));
        } else {
            echo "Nenhum dado encontrado, a aplicação irá parar por aqui!";
            die;
        }
    }

    /* Listar todos os usuários de determinada tabela */

    public static function getList() {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_cliente ORDER BY nome"); /* ORDER BY - organiza os dados dependendo do parâmetro */
    }

    /* Listar dados de acordo com o parâmetro de entrada */

    public static function search($nome) {
        $sql = new Sql();
        $resultado = $sql->select("SELECT * FROM tb_cliente WHERE nome LIKE :SEARCH ORDER BY nome", array(
            ":SEARCH" => "%{$nome}%"
        ));

        if (count($resultado) > 0) {
            return $resultado;
        } else {
            echo "Sem resultados";
            die;
        }
    }

    /* Autenticação de nome e data de nascimento do usuário */

    public function authenticate($nome, $dataNascimento) {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_cliente WHERE nome = :NOME AND dataNascimento = :DATANASCIMENTO", array(
            "NOME" => $nome,
            "DATANASCIMENTO" => $dataNascimento
        ));
        if (count($result) > 0) {
            $row = $result[0];

            /* O método __toString retornará os dados */
            $this->setIdcliente($row['idcliente']);
            $this->setNome($row['nome']);
            $this->setDataNascimento($row['dataNascimento']);
            $this->setDataCadastro(new DateTime($row['dataCadastro']));
        } else {
            echo 'Dados inválidos';
            die;
        }
    }

    public function __toString() {
        return json_encode(array(
            "idcliente" => $this->getIdcliente(),
            "nome" => $this->getNome(),
            "dataNascimento" => $this->getDataNascimento(),
            "dataCadastro" => $this->getDataCadastro()->format("d/m/Y H:i:s")
        ));
    }

}
?>

