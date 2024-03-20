<?php

class Livre
{
    //Properties
    private string $_livreName;
    private Auteur $_auteur;
    private DateTime $_year;
    private int $_pages;
    private float $_price;


    //Constructor
    public function __construct(string $livreName, Auteur $auteur, string $year, int $pages, float $price)
    {
        $this->_livreName = $livreName;
        $this->_year = new DateTime($year);
        $this->_pages = $pages;
        $this->_price = $price;

        $this->_auteur = $auteur;
        $auteur->addLivre($this);
    }

    //Getter

    public function getLivreName()
    {

        return $this->_livreName;
    }

    public function getAuteur()
    {

        return $this->_auteur;
    }

    public function getYear()
    {
        
        return $this->_year;
    }

    public function getPages()
    {

        return $this->_pages;
    }

    public function getPrice()
    {

        return $this->_price;
    }



    //Setter

    public function setAuteur($auteur)
    {

        return $this->_auteur = $auteur;
    }
    public function setYear($year)
    {

        return $this->_year = $year;
    }
    public function setPages($pages)
    {

        return $this->_pages = $pages;
    }
    public function setPrice($price)
    {

        return $this->_price = $price;
    }

    //Method


    public function __toString()
    {
        return "Titre : " . $this->getLivreName() . " (" . $this->getYear()->format('Y') . ") " . $this->getPages() . ", Prix : " . $this->getPrice() . " €<br>";
    }
}
