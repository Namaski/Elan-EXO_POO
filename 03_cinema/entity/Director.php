<?php

require_once('./entity/Personne.php');

//DIRECTOR

class Director extends Personne
{
    //Properties
    private array $_films = [];

    //Constructor
    public function __construct(string $prenom, string $nom, string $dateNaissance)
    {
        parent::__construct($prenom, $nom, $dateNaissance);
    }

    //Method
    //Intra
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }

    //Extra
    public function showFilmographie()
    {   
        echo $this ." à réalisé : <br>";
        foreach ($this->_films as $film) {
            echo $film ."<br>";
        } 
    }

}


