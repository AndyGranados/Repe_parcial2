<?php

namespace Root\Html\Enums;

use Root\Html\Modelos\Vehiculo;
use Root\Html\Modelos\Automovil;
use Root\Html\Modelos\Motocicleta;
use Root\Html\Modelos\Pickup;

enum TipoVehiculo: string
{
    case Automovil = 'A';
    case Motocicleta = 'M';
    case Pickup = 'P';

    public function etiqueta(): string
    {
        return match($this) {
            self::Automovil => 'Automóvil',
            self::Motocicleta => 'Motocicleta',
            self::Pickup => 'Pickup',
        };
    }

    public function crearVehiculo(string $placa, string $propietario): Vehiculo
    {
        return match($this) {
            self::Automovil => new Automovil($placa, $propietario),
            self::Motocicleta => new Motocicleta($placa, $propietario),
            self::Pickup => new Pickup($placa, $propietario),
        };
    }
}