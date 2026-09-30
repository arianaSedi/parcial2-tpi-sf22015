<?php

namespace App\Enums;

enum TipoEquipo() : string{

    case laptop = 'laptop'
    case proyector = 'proyector'

    public function etiqueta():string{
        return match($this){
            self::laptop => 'laptop',
            self::proyector => 'proyector',
        };
    }

    public function crearEquipo(string $codigo, string $nombre) : Equipo{

        return match($this){
            self::laptop => 'laptop',
            self::proyector => 'proyector',
        };

    }

}
?>