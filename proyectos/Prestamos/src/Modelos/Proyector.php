<?php

namespace App\Modelos;

class Proyector extends EquipoAbs{

    public function __construct(readonly $codigo, readonly $nombre){

        parent::__construct(readonly $codigo, readonly $nombre);

    }


    public function diasMaximoPrestamo():int{

        return 1; //1 dias de prestamos
    }
}

?>