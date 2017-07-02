<?php

namespace Trabalho

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

    use Traits\Hidratacao;

}