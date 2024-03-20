<?php

require_once("./entity/Film.php");
require_once("./entity/Role.php");
require_once("./entity/Casting.php");
require_once("./entity/Genre.php");
require_once("./entity/Actor.php");
require_once("./entity/Director.php");


// /!\ Les données ne sont pas forcément exact, nottament le casting.

// INSTANCE REALISATEUR
$d1 = new Director("Reeves", "Matt", "27-04-1966");
$d2 = new Director("Nolan", "Christopher", "30-07-1970");
$d3 = new Director("Smith", "John", "12-05-1980");
$d4 = new Director("Scott", "Ridley", "30-11-1948");

// INSTANCE ACTEUR

$a1 = new Actor("Patinson", "Robert", "27-04-1966");
$a2 = new Actor("Bale", "Christian", "30-01-1974");
$a3 = new Actor("Affleck", "Ben", "14-03-1950");
$a4 = new Actor("Ford", "Harrison", "13-07-1942");
$a5 = new Actor("Caine", "Michael", "01-01-1950");


// INSTANCE GENRE
$g1 = new Genre("Thriller");
$g2 = new Genre("Science-Fiction");

// INSTANCE ROLE
$r1 = new Role("Batman");
$r2 = new Role("Blade Runner");
$r3 = new Role("Alfred");

// INSTANCE FILM
$f1 = new Film("The Batman",$d1,$g1,90, "01-01-2020");
$f2 = new Film("Batman Begins",$d2,$g1,90, "01-01-2005");
$f3 = new Film("The Dark Knight",$d2,$g1,152, "01-01-2008");
$f4 = new Film("Blade Runner",$d4,$g2,117, "01-01-1982");

// INSTANCE CASTING 

$c1 = new Casting($f1, $a1, $r1);
$c2 = new Casting($f2, $a2, $r1);
$c3 = new Casting($f3, $a3, $r1);
$c4 = new Casting($f3, $a1, $r3);
$c5 = new Casting($f4, $a5, $r2);




// EX1
echo "<h2> 1. Lister la liste des acteurs ayant incarné un rôle précis </h2>";
// Obtenir tous les acteurs ayant joué le rôle de "Batman"
echo $r1->listRole();
// Obtenir tous les acteurs ayant joué le rôle de "Blade Runner
echo $r2->listRole();
// Obtenir tous les acteurs ayant joué le rôle de "Alfred"
echo $r3->listRole();

//EX2
// Obtenir tout le casting d'un film
echo "<h2> 2. Lister le casting d'un film </h2>";
$f3->getCasting();

//EX3
// Obtenir les films en fonction du genre :
echo "<h2> 3. Obtenir les films en fonction du genre : </h2>";
$g1 -> showFilms();

//EX4
// Lister la filmographie d'un acteur
echo "<h2> 4. Lister la filmographie d'un acteur : </h2>";
$a1->showFilmographie();

//EX5
//Lister la filmographie d'un réalisateur
echo "<h2> 5. Lister la filmographie d'un réalisateur : </h2>";
$d1->showFilmographie();
