<?php

declare(strict_types=1);

require_once "Midia.php";
require_once "Reproduzivel.php";

class Podcast extends Midia implements Reproduzivel
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $apresentador
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return "Reproduzindo podcast: {$this->getTitulo()} com {$this->apresentador}";
    }
}
?>
