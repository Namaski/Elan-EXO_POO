<?php

require_once('./entity/Personne.php');

//ACTOR
class Actor extends Personne
{
    //Properties
    private array $_castings = [];

    //Constructor
    public function __construct(string $prenom, string $nom, string $dateNaissance)
    {
        parent::__construct($prenom, $nom, $dateNaissance);
    }

    // Getters

    public function getCasting(){
        return $this->_castings;
    }

    //Method
    //Intra
    public function addCasting($casting)
    {
        $this->_castings[] = $casting;
    }

    //Extra
    public function showFilmographie()
    {   
        echo $this ." à joué dans : <br>";
        foreach ($this->_castings as $casting) {
            echo $casting->getFilm() . "<br>";
        } 
    }
    

    public function __toString()
    {
        return $this->getNom() ." " . $this->getPrenom();
    }

}