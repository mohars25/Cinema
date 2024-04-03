<?php



require_once "Film.php";
require_once "Acteur.php";
require_once "Role.php";
require_once "Realisateur.php";
// require_once "realisateurpage.php";


$realisateur1 = new Realisateur("Krawczyk", "Gérard", "M", "1953-05-17");
$realisateur2 = new Realisateur("Nakache", "Olivier", "M", "1973-04-15");
$realisateur3 = new Realisateur("Apted", "Michael", "M", "1941-02-10");
$realisateur4 = new Realisateur("Mendes", "Sam", "M", "1965-08-01");
$realisateur5 = new Realisateur("Besson","Luc", "M","1959-03-18") ;

$realisateurs = [$realisateur1, $realisateur2, $realisateur3, $realisateur4, $realisateur5];



