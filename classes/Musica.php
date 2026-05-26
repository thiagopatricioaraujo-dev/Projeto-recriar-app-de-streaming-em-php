<?php

declare(strict_types=1);

require_once "Midia.php";
require_once "Reproduzivel.php";

class Musica extends Midia implements Reproduzivel
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