<?php

//PERSONNE
abstract class Personne
{
    // Properties
    private string $_prenom;
    private string $_nom;
    private DateTime $_dateNaissance;

    // Constructor
    public function __construct(string $prenom, string $nom, string $dateNaissance)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        
    }


    // Getter

    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    //Setter

    public function setPrenom($prenom)
    {
        return $this->_prenom = $prenom;
    }
    public function setNom($nom)
    {
        return $this->_nom = $nom;
    }
    public function setDateNaissance($dateNaissance)
    {
        return $this->_dateNaissance = $dateNaissance;
    }

    //Method
    public function getNomComplet() {
        return $this->_nom . " " . $this->_prenom;
    }

    public function __toString() {
        return  $this->_nom ." ". $this->_prenom;
    }
}

