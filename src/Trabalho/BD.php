<?php

class BD {

    public static $instancia;
    public $usuario;
    public $senha;
    public $host;
    public $base;

    public static function Singleton() {

        if ( self::$instancia === NULL ) {
            $class = __CLASS__;
            self::$instancia = new $class();
        }

        return self::$instancia;
    }

    private function __construct( $u, $s, $h, $b ) {
        $dsn = 'mysql:dbname=' . $b . '.&host=' . $h;
    }

}