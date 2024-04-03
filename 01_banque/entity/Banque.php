<?php

class CompteBancaire
{
    //Properties
    private string $_libelle;
    private float $_soldeInitial;
    private string $_devise;
    private Titulaire $_titulaire;

    const LIBELLE_CC = "Compte Courant";
    const LIBELLE_LA = "Livret A";

    const DEVISE_DOLLAR = "$";
    const DEVICE_EURO = "€";

    //constructor
    public function __construct(string $devise, Titulaire $titulaire, int $soldeInitial = 0)
    {
        $this ->_soldeInitial = $soldeInitial;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->addCompteBancaire($this);
    }

    // Getters
    public function getLibelle()
    {
        return $this->_libelle;
    }

    public function getSoldeInitial()
    {
        return $this->_soldeInitial;
    }

    public function getDevise()
    {
        return $this->_devise;
    }

    public function getTitulaire()
    {
        return $this->_titulaire;
    }

    // Setters
    public function setLibelle($libelle)
    {
        if (in_array($libelle, [self::LIBELLE_CC, self::LIBELLE_LA])) {
            $this->_libelle = $libelle;
        }
    }

    public function setSoldeInitial($soldeInitial)
    {
        $this->_soldeInitial = $soldeInitial;
    }

    public function setDevise($devise)
    {
        if (in_array($devise, [self::DEVICE_EURO, self::DEVISE_DOLLAR])) {
            $this->_devise = $devise;
        }
    }

    public function setTitulaire($titulaire)
    {
        $this->_titulaire = $titulaire;
    }

    // Methods

    public function __toString()
    {
        return "Libellé: " . $this->_libelle . ", Titulaire: " . $this->_titulaire . ", Solde: " . $this->_soldeInitial . " " . $this->_devise;
    }

    public function messageBienvenue()
    {
        echo "<p> Bienvenue " . $this->_titulaire;
    }

    public function crediterCompte($montant)
    {
        if ($montant >= 0) {
            echo "<p> Compte ". $this->_libelle ." de " . $this->_titulaire . " crédité de " . $montant . " " . $this->_devise . "</p>";
            $newMontant = $this->getSoldeInitial() + $montant;
            return $this->setSoldeInitial($newMontant);
        } else {

            echo "<p>opération impossible le montant doit être supérieur à 0</p>";
        }
    }

    public function debiterCompte($montant)
    {
        if ($montant >= 0) {
            echo "<p> Compte ". $this->_libelle ." de " . $this->_titulaire . " débité de " . $montant . " " . $this->_devise . "</p>";
            $newMontant = $this->getSoldeInitial() - $montant;
            return $this->setSoldeInitial($newMontant);
        } else {

            echo "<p>opération impossible le montant doit être supérieur à 0</p>";
        }
    }

    public function virementSortant($montant, $compteDestinataire) {
        $this->debiterCompte($montant);
        $compteDestinataire->crediterCompte($montant);
    }

}
