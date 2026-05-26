<?php

declare(strict_types=1);

require_once "classes/Reproduzivel.php";
require_once "classes/Midia.php";
require_once "classes/Musica.php";
require_once "classes/Podcast.php";
require_once "classes/VideoCurto.php";
require_once "classes/Playlist.php";

$musica = new Musica(
    "Call Out My Name",
    228,
    "The Weeknd"
);

$podcast = new Podcast(
    "Flow Podcast",
    3600,
    "Igor 3K"
);

$video = new VideoCurto(
    "Receita rápida",
    60,
    "Chef Oto"
);

$playlist = new Playlist();

$playlist->adicionarMidia($musica);
$playlist->adicionarMidia($podcast);
$playlist->adicionarMidia($video);

$playlist->reproduzirTudo();
?>