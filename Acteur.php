<?php

require_once 'Personne.php';

class Acteur extends Personne {
    public $roles = [];

    public function ajouterRole($role) {
        $this->roles[] = $role;
    }
}
