<?php

declare(strict_types=1);

namespace App;

class videoCurto extends midia 
{
    public function __construct(
        string $titulo,
        int $duracaoSegundos,
        private string $plataforma
    ){
        parent: :__construct($titulo, $duracaoSegundos);
    }
    
    public function reproduzir(): string 
    {
        return " [video curto] exibindo: '{this->getTitulo()}' na plataforma {$this->plataforma} ({$this->getduracaoSegundos()})";
    }
}
?>
