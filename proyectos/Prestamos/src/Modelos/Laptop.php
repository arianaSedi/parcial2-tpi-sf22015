<?php

namespace App\Modelos;

class Laptop extends EquipoAbs{

    public function __construct(readonly $codigo, readonly $nombre){

        parent::__construct(readonly $codigo, readonly $nombre);

    }

    public function diasMaximoPrestamo():int{

        return 3; //3 dias de prestamos
    }
}

?>