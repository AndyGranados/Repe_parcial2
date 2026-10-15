<?php

namespace Root\Html\Modelos;

use Root\Html\Contratos\Cobrable;

abstract class Vehiculo implements Cobrable
{
    public function __construct(
        public readonly string $placa,
        public readonly string $propietario
    ) {}

    abstract public function tarifaPorHora(): float;

    public function calcularTarifa(int $minutos): float
    {
        if ($minutos <= 15) {
            return 0.0;
        }

        $minutosCobrar = $minutos - 15;
        $horas = ceil($minutosCobrar / 60);

        return $horas * $this->tarifaPorHora();
    }
}