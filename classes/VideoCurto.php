<?php

declare(strict_types=1);

require_once "Midia.php";
require_once "Reproduzivel.php";

class VideoCurto extends Midia implements Reproduzivel
{
    public function __construct(
        string $titulo,
        int $duracaoSegundos,
        private string $plataforma
    ) {
        parent::__construct($titulo, $duracaoSegundos);
    }
    
    public function reproduzir(): string 
    {
        return " [video curto] exibindo: '{$this->getTitulo()}' na plataforma {$this->plataforma} ({$this->getDuracao()})";
    }
}
?>
