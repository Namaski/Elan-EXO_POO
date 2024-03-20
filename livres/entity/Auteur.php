<?php

class Auteur
{
    //Properties
    private string $_prenom;
    private string $_nom;
    private array $_livres =[];


    //Constructor
    public function __construct($prenom, $nom)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
    }

     // Getters
     public function getPrenom()
     {
         return $this->_prenom;
     }
 
     public function getNom()
     {
         return $this->_nom;
     }
 
     // Setters
     public function setPrenom($prenom)
     {
         $this->_prenom = $prenom;
     }
 
     public function setNom($nom)
     {
         $this->_nom = $nom;
     }

     //Method

     public function addLivre(Livre $livre)
     {
        $this->_livres[] = $livre;
     }
     
     
     public function afficherBibliographie()
     {
        echo $this. "<br>";
         foreach ($this -> _livres as $livre) {
            echo $livre . "<br>";
         }
     }
     
     public function __toString()
     {
        return $this->getNom() . ' '. $this->getPrenom();
     }

}

