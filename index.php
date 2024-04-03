<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="couleurtitre" >
    <figure><img src="camera.png" alt=""></figure>
    <h1>MOMOCINE</h1>
</div>
<style>
    *{
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: goldenrod;
    }
body{
    color: black;
    background: linear-gradient(to top, transparent, mistyrose),
    url("pic.jpg");
    font-size: 25px;
    text-align: center;
    width: 90%;
    margin: auto auto ;
    border-radius: 8%;
    
    
}


img{
    width: 4%;
    
}
h1{
    font-family: DejaVu Sans Mono, monospace;
    font-size: 50px;
    
}

.menu-vertical {
            display: flex;
            
            align-items: flex-start;
            padding-bottom: 20px;
            
            border-radius: 5%;
            margin-bottom: 100px;
        }
.menu-vertical a {
            margin: 3px;
            color: black;
            text-decoration: none;
            font-size: 40px;
            font-style: bold ;
            
            
            
            
        }

</style>
<body>

<div class="menu-vertical">
        <a href="#">Film</a>
        <a href="#">Acteur</a>
        <a href="realisateurpage.php">Réalisateur</a>
</div>








<?php







//Cour: 



// La programmation orientée objet il y a 4 principes: 

//L'ENCAPSULATION : c'est un principe qui consiste a proteger l'etat des attributs (public, private, protected)

//L'ABSTRACTION : Son objectif principal est de gérer la complexité en masquant les détails inutiles à l’utilisateur. Cela permet 
//à l’utilisateur d’implémenter une logique plus complexe sans comprendre ni même penser à toute la complexité cachée.

//L'HERITAGE: inclure des caractéristiques d'une classe dans une autre classe (comme l'exercice de la voiture electrique) 

// LE POLYMORPHISME :est l'idée d'autoriser le même code à être utilisé avec différents types, ce qui permet des implémentations plus abstraites et générales.


//definition de: 

//Une méthode magique: est une fonction qui se lance quand on fait une action précise

//Une class: est un moule qui regroupe des fonctions et des propriétés 
//et qui permet de créer un nouvelle object

//Objet= est une instance de la classe (les objets donnent vie a la classe)
















require_once "Film.php";
require_once "Acteur.php";
require_once "Role.php";
require_once "Realisateur.php";



$realisateur1 = new Realisateur("Krawczyk", "Gérard", "M", "1953-05-17");
$realisateur2 = new Realisateur("Nakache", "Olivier", "M", "1973-04-15");
$realisateur3 = new Realisateur("Apted", "Michael", "M", "1941-02-10");
$realisateur4 = new Realisateur("Mendes", "Sam", "M", "1965-08-01");
$realisateur5 = new Realisateur("Besson","Luc", "M","1959-03-18") ;

$realisateurs = [$realisateur1, $realisateur2, $realisateur3, $realisateur4, $realisateur5];



$film1 = new Film("Taxi 3", "2003-01-29" , 148, $realisateur1, "Action","Marseille, à l'approche de Noël. Daniel ne cesse de rajouter des gadgets à son taxi. Au point de faire passer son bolide avant sa compagne, Lilly, qui décide de retourner vivre chez ses parents. Petra, elle, reproche à Emilien d'avoir la tête ailleurs. Celui-ci enrage en effet de ne pas avoir encore arrêté le gang des pères Noël, qui multiplie les braquages depuis huit mois.");
$film2 = new Film("Intouchable", "2011-06-11", 127, $realisateur2, "Biopic", "A la suite d’un accident de parapente, Philippe, riche aristocrate, engage comme aide à domicile Driss, un jeune de banlieue tout juste sorti de prison. Bref la personne la moins adaptée pour le job. Ensemble ils vont faire cohabiter Vivaldi et Earth Wind and Fire, le verbe et la vanne, les costumes et les bas de survêtement... Deux univers vont se télescoper, s’apprivoiser, pour donner naissance à une amitié aussi dingue, drôle et forte qu’inattendue, une relation unique qui fera des étincelles et qui les rendra... Intouchables.");
$film3 = new Film("Le monde ne suffit pas", "1999-11-08",128,$realisateur3, "Espionnage" , "Le magnat du pétrole Sir Robert King est assassiné dans l’enceinte même du siège des services secrets britanniques. Après une course-poursuite acharnée sur la Tamise, l’auteure de l’attentat, une tueuse professionnelle travaillant pour un puissant anarchiste connu sous le nom de Renard, se donne elle-même la mort. Craignant que la fille et héritière de King, Elektra, puisse être la prochaine cible de Renard, James Bond se charge de la protéger. En Azerbaïdjan, où King avait commencé à exploiter un nouveau gisement pétrolier, 007 rencontre cette dernière et retrouve également son ancien ennemi du KGB devenu mafieux et homme d’affaires, Valentin Zukovsky. Mais entre trahisons et rachats, Bond va être amené à former les bonnes alliances et à savoir qui sont ses véritables ennemis…");
$film4 = new Film("007 Spectre", "2015-11-15",148, $realisateur4, "Espionnage", "Un message cryptique surgi du passé entraîne James Bond dans une mission très personnelle à Mexico puis à Rome, où il rencontre Lucia Sciarra, la très belle veuve d’un célèbre criminel. Bond réussit à infiltrer une réunion secrète révélant une redoutable organisation baptisée Spectre.

Pendant ce temps, à Londres, Max Denbigh, le nouveau directeur du Centre pour la Sécurité Nationale, remet en cause les actions de Bond et l’existence même du MI6, dirigé par M. Bond persuade Moneypenny et Q de l’aider secrètement à localiser Madeleine Swann, la fille de son vieil ennemi, Mr White, qui pourrait détenir le moyen de détruire Spectre. Fille de tueur, Madeleine comprend Bond mieux que personne…

En s’approchant du cœur de Spectre, Bond va découvrir qu’il existe peut-être un terrible lien entre lui et le mystérieux ennemi qu’il traque…");
$film5 = new Film("Léon","1994-09-14",110, $realisateur5,"Action","Un tueur à gages répondant au nom de Léon prend sous son aile Mathilda, une petite fille de douze ans, seule rescapée du massacre de sa famille. Bientôt, Léon va faire de Mathilda une nettoyeuse, comme lui. Et Mathilda pourra venger son petit frère...");
// $film6 = new Film(" Astérix & Obélix - Mission Cléopâtre","2002-01-30",107,$realisateur6 ,"Comédie","Cléopâtre, la reine d’Égypte, décide, pour défier l'Empereur romain Jules César, de construire en trois mois un palais somptueux en plein désert. Si elle y parvient, celui-ci devra concéder publiquement que le peuple égyptien est le plus grand de tous les peuples. Pour ce faire, Cléopâtre fait appel à Numérobis, un architecte d'avant-garde plein d'énergie. S'il réussit, elle le couvrira d'or. S'il échoue, elle le jettera aux crocodiles.

// Celui-ci, conscient du défi à relever, cherche de l'aide auprès de son vieil ami Panoramix. Le druide fait le voyage en Égypte avec Astérix et Obélix. De son côté, Amonbofis, l'architecte officiel de Cléopâtre, jaloux que la reine ait choisi Numérobis pour construire le palais, va tout mettre en œuvre pour faire échouer son concurrent.");

$acteur1 = new Acteur("Nacery", "Samy", "M", "1961-11-11",);
$acteur2 = new Acteur("Cotillard", "Marion", "F", "1975-09-30");
$acteur3 = new Acteur("Sy", "Omar", "M", "1933-04-09");
$acteur4 = new Acteur("Marceau", "Sophie", "F", "1966-11-17");
$acteur5 = new Acteur("Craig", "Daniel", "M", "1968-03-02");
$acteur6 = new Acteur("Brosnan", "Pierce", "M", "1953-05-16");
$acteur7 = new Acteur("Cluzet","Francois","M","1955-09-21");
$acteur8 = new Acteur("Reno","Jean","M","1948-07-30");
$acteur9 = new Acteur("Clavier","Christian","M","1952-05-06");
$acteur10 = new Acteur("Depardieu","Gérard", "M","1948-12-27") ;
$acteur11 = new Acteur("Bellucci","Monica","F","1964-09-30");



$role1 = new Role("Daniel Morales");
$role2 = new Role("Lilly Bertineau");
$role3 = new Role("James Bond");
$role4 = new Role("Elektra King");
$role5 = new Role("Driss");

$role6 = new Role("Philippe");
$role7 = new Role("Léon");
$role8 = new Role("Asterix");

$role9 = new Role("Cléopâtre");
$role10= new Role("Obelix");










$film1->ajouterActeur($acteur1, $role1);
$film1->ajouterActeur($acteur2, $role2);
$film2->ajouterActeur($acteur3, $role5);
$film2->ajouterActeur($acteur7, $role6);
$film3->ajouterActeur($acteur6, $role3);
$film3->ajouterActeur($acteur4, $role4);
$film4->ajouterActeur($acteur5, $role3);



echo "Titre du Film : <b>" . $film1->titre  ."</b> <br>"."Date de sortie en France : ". $film1->dateSortie ."<br>"."Genre : ".$film1->genre."<br>"."Acteur : ".$film1->getCasting()."<br>"  . "Synopsis :<br> "   .$film1->synopsis;
 ;
 echo '<iframe width="500" height="1000" src="https://player.allocine.fr/18675065.html"> </iframe>'; 
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";


echo "Titre du Film : <b>"   . $film2->titre  .   "</b> <br> "."Date de sortie en France : " . $film2->dateSortie ."<br>"."Genre : ".$film2->genre ."<br>"."Acteur : ".$film2->getCasting()."<br>". "Synopsis :<br> "   .$film2->synopsis;
echo "<br>";
echo '<iframe width="500" height="1000" src="https://player.allocine.fr/19253309.html"> </iframe>';
echo "<br>";
echo "<br>";
echo "Titre du Film : <b>". $film3->titre ."</b> <br> "."Date de sortie en France : ". $film3->dateSortie ."<br>"."Genre : ".$film3->genre . "<br>"."Acteur : ".$film3->getCasting()."<br>"  ."Synopsis :<br> ".$film3->synopsis;
echo "<br>";
echo '<iframe width="10" height="1000" src="https://player.allocine.fr/18650452.html"> </iframe>';
echo "<br>";
echo "Titre du Film : <b>". $film4->titre ."</b> <br> "."Date de sortie en France : ". $film4->dateSortie ."<br>"."Genre : ".$film3->genre . "<br>"."Acteur : ".$film4->getCasting()."<br>"  ."Synopsis :<br> ".$film4->synopsis;
echo  "<br>";
echo '<iframe width="500" height="1000" src="https://player.allocine.fr/19557852.html"> </iframe>';
    
    
    






 
    

?>







</body>
</html>



