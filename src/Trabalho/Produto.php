<?php

namespace Trabalho;

class Produto {

    private $nome;
    private $valor;

    public function getNome() {
        return $this->nome;
    }

    public function setNome( $nome ) {
        $this->nome = $nome;        
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor() {
        $this->valor = $valor;
    }

    public function salvar($bd) {
        $sql    = "INSERT INTO PRODUTO (NOME, VALOR) VALUES (:NOME, :VALOR)";
        $stmt   = $bd->prepare($sql);
        $result = $stmt->execute(
            array(
                ':NOME'  => $this->nome,
                ':VALOR' => $this->valor
            ));

        return $result;
    }

    use Traits\Hidratacao;

}







