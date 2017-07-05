<?php

namespace Trabalho;

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

    public function salvar($bd) {
        $sql    = "INSERT INTO USUARIO (EMAIL, SENHA) VALUES (:EMAIL, :SENHA)";
        $stmt   = $bd->prepare($sql);
        $result = $stmt->execute(
            array(
                ':EMAIL' => $this->email,
                ':SENHA' => $this->senha
            ));

        return $result;
    }

    use Traits\Hidratacao;
    
}


