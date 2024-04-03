<?php

require_once 'Realisateur.php';
require_once 'Role.php';

class Film {
    public $titre;
    public $dateSortie;
    public $duree;
    public $realisateur;
    public $synopsis;
    public $genre;
    public $acteurs = [];

    public function __construct($titre, $dateSortie, $duree, $realisateur, $genre, $synopsis = "") {
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->synopsis = $synopsis;
        $realisateur->ajouterFilm($this);
    }

    public function ajouterActeur($acteur, $role) {
        $this->acteurs[$acteur->getNomComplet()] = $role;
        $acteur->ajouterRole($role);
    }

    public function getCasting() {
        $casting = [];
        foreach ($this->acteurs as $acteur => $role) {
            $casting[] = "$acteur en tant que " . $role->nom ;
        }
        return join(", ", $casting);
    }
}
