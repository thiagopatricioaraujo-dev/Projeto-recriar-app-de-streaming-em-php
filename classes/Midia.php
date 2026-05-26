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

class Musica extends Midia
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $artista
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return "Tocando agora: " . $this->getTitulo() .
            " - " . $this->artista .
            " (" . $this->getDuracao() . " segundos)";
    }
}
?>
