<?php

namespace Trabalho;

class BD {

    public function dbConect() {
        $dsn = 'mysql:dbname=trabalho_pos_2017;host=localhost';       
        $dbn = new \PDO($dsn, 'root', '');
        return $dbn;
    }

}