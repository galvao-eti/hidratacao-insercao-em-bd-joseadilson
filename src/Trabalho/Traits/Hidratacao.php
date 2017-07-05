<?php

namespace Trabalho\Traits;

trait Hidratacao {

    public function saveValues(array $data) {

        try {
            foreach( $data as $key => $val ) {
                $this->$key = $val;
            }
        } catch (Exception $e) {
            echo $e;
        }

    }
    
}