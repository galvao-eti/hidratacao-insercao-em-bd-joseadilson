<?php

namespace Trabalho

class Usuario {

    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail( $email ) {
        $this->email = $email;        
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha() {
        $this->senha = $senha;
    }

    use Traits\Hidratacao;
    
}