<?php

// require("./controller/Livre.php");
require_once "./entity/Livre.php";
require_once "./entity/Auteur.php";

$a1 = new Auteur("Stephen", "KING");

$l1 = new Livre("Ca", $a1,"01-01-1986", 1138, 20.00);
$l2 = new Livre("Simetierre",$a1,"01-01-1983", 374, 15.00);
$l3 = new Livre("Le fléau",$a1,"01-01-1978", 823, 14.00);
$l4 = new Livre("Shining",$a1,"01-01-1977", 1977, 16.00);

// $l5 = new Livre("Le monde s'effronde", $a1,"Chinua Achebe", 2000, 254, 10);
// $l6 = new Livre("Contes",$a1, "Hans Christian Andersen", 1954, 480, 15);


$a1->afficherBibliographie();
