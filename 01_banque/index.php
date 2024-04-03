<?php

require_once("./entity/Banque.php");
require_once("./entity/Titulaire.php");


// Instanciation de la classe Titulaire

$t1 = new Titulaire("Doe", "Jhon","01-01-1986", "Mulhouse");
$t2 = new Titulaire("Doe", "Jane","01-01-1990", "Mulhouse");

// Instanciation de la classe CompteBancaire

$cb1 = new CompteBancaire("$",$t1);
$cb1->setLibelle("Compte Courant");
$cb2 = new CompteBancaire("$",$t1);
$cb2->setLibelle("Livret A");

$cb3 = new CompteBancaire("$",$t2);
$cb3->setLibelle("Compte Courant");


// Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte
echo "<h3> Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte </h3>";

echo $cb1;

// Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci
echo "<h3> Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci </h3>";

echo $t1->showCompteBancaires();
echo $t2->showCompteBancaires();

/* Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros
Débiter le compte de X euros
Effectuer un virement d'un compte à l'autre. */

echo "<h3>  Sur un compte bancaire, on doit pouvoir : <br> Créditer le compte de X euros <br> Débiter le compte de X euros <br> Effectuer un virement d'un compte à l'autre. * </h3>";

$t1->faireVirement(100, $cb1, $cb2);
$t1->faireVirement(100, $cb2, $cb3);

echo $t1->showCompteBancaires();
echo $t2->showCompteBancaires();
