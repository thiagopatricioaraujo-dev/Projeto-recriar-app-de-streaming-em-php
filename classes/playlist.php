<?php

declare(strict_types=1);

require_once "Reproduzivel.php";

class Playlist
{
 @var Reproduzivel[]

    private array $midias = [];

    public function adicionarMidia(Reproduzivel $midia): void
    {
        $this->midias[] = $midia;
    }

    public function reproduzirTudo(): void
    {
        foreach ($this->midias as $midia) {
            echo $midia->reproduzir() . PHP_EOL;
        }
    }
}
?>