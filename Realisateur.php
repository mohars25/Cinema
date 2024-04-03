<?php

require_once 'Personne.php';

class Realisateur extends Personne {
    public $films = [];

    public function ajouterFilm($film) {
        $this->films[] = $film;
    }
}
