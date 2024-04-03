<?php


class Personne {
    public $nom;
    public $prenom;
    public $sexe;
    public $dateNaissance;

    public function __construct($nom, $prenom, $sexe,  $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNomComplet() {
        return $this->nom . " " . $this->prenom;
    }

    public function __toString() {
        return  "Non : " .$this->nom ."<br>" . " Prénom : " . $this->prenom ."<br>" ."Date de naissance : ".$this->dateNaissance."<br>"."Genre : ".$this->sexe . "<br>"."<br>";
    }
}


