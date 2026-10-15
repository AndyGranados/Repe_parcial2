<?php

namespace Root\Html\Excepciones;

use InvalidArgumentException;

final class TicketInvalidoException extends InvalidArgumentException
{
    public function __construct(
        public readonly string $campo,
        string $mensaje
    ) {
        parent::__construct($mensaje);
    }
}