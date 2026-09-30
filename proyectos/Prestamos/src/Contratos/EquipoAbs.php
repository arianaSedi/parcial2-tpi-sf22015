<?php

namespace App\Contracts;

abstract class EquipoAbs{

    public function __construct(readonly $codigo, readonly $nombre){

    }

    abstract function diasMaximoPrestamo():int; //metodo abstracto no se puede implementar

}

?>