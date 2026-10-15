<?php

namespace Root\Html\Contratos;

interface Cobrable
{
    public function calcularTarifa(int $minutos): float;
}