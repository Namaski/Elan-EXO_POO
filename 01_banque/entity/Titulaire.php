<?php

class Titulaire
{
    // Properties
    private string $_nom;
    private string $_prenom;
    private DateTIme $_dateDeNaissance;
    private string $_ville;
    private array $_listeComptesBancaires = [];

    // Constructor
    public function __construct( string $nom, string $prenom, string $dateDeNaissance, string $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNaissance = new DateTime($dateDeNaissance);
        $this->_ville = $ville;
    }
    
    // Getters
    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function getListeComptesBancaires()
    {
        return $this->_listeComptesBancaires;
    }

    // Setters
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    public function setListeComptesBancaires($listeComptesBancaires)
    {
        $this->_listeComptesBancaires = $listeComptesBancaires;
    }

    //Method

    public function __toString()
    {
        return "<p> Nom: " . $this->_nom . ", Prénom: " . $this->_prenom . ", Ville: " . $this->_ville;
    }

    public function addCompteBancaire(CompteBancaire $compte)
    {
        $this->_listeComptesBancaires[] = $compte;
    }

    public function getAge()
    {
        $currentDate = new DateTime("now");


        $dateDeNaissance = $this->_dateDeNaissance;

        $age = $currentDate->diff($dateDeNaissance);

        return $age->y;
    }

    public function showCompteBancaires()
    {
        echo "<p><strong> Voici les comptes bancaires de " . $this->_prenom  . " " . $this->_nom . ", " . $this->getAge() . "ans :</strong></p>";
        echo "<ul>";
        foreach ($this->_listeComptesBancaires as $compteBancaire) {
            echo "<li> $compteBancaire </li>";
        }
        echo "</ul>";
    }

    public function faireVirement($montant, $compteExpediteur, $compteDestinataire)
    {
        $compteExpediteur->virementSortant($montant, $compteDestinataire);
    }
}
