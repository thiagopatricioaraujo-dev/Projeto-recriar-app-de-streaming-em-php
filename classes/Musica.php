<?php

declare(strict_types=1);

class Musica extends Midia
{
    public function __construct(
        private string $artista,
        string $titulo,
        int $duracao
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

$musica = new Musica(
    "The Weeknd",
    "Call Out My Name",
    228
);

echo $musica->reproduzir();
