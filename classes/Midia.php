<?php

declare(strict_types=1);

abstract class Midia
{
    public function __construct(
        private string $titulo,
        private int $duracao
    ) {
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getDuracao(): int
    {
        return $this->duracao;
    }

    abstract public function reproduzir(): string;
}
?>
