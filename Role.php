<?php

require_once 'Acteur.php';

class Role {
    public $nom;
    public $acteurs = [];

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function ajouterActeur($acteur) {
        if (!in_array($acteur, $this->acteurs, true)) {
            $this->acteurs[] = $acteur;
            $acteur->ajouterRole($this);
        }
    }

    public function getActeurs() {
        $noms = [];
        foreach ($this->acteurs as $acteur) {
            $noms[] = $acteur->getNomComplet();
        }
        return join(", ", $noms);
    }
}

