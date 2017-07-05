<?php

require '../../autoload.php';

use Trabalho\BD;
use Trabalho\Produto;
use Trabalho\Usuario;

$bd = new BD();
$p  = new Produto();
$u  = new Usuario();

$p->saveValues(array(
    "nome" => "celular",
    "valor" => "1000"
));

$u->saveValues(array(
    "email" => "joseadilsson@gmail.com",
    "senha" => "11111111111"
));

if ($p->salvar($bd->dbConect())) {
    echo "Produto cadastrado!";
    echo "<br><br>";
} else  {
    echo "Produto não foi cadastrado!";
    echo "<br><br>";
}

if ($u->salvar($bd->dbConect())) {
    echo "Usuario cadastrado!";     
} else {
    echo "Usuario não foi cadastrado!";
}
