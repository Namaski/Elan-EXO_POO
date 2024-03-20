<?php

class Film
{
    //Properties
    private string $_nom;
    private Director $_director;
    private Genre $_genre;
    private int $_duree;
    private DateTime $_date;
    private array $_castings = [];

    //Constructor
    public function __construct(string $nom, Director $director, Genre $genre, int $duree, string $date)
    {
        $this->_nom = $nom;
        $this->_director = $director;
        $director->addFilm($this);
        $genre->addFilm($this);
        $this->_duree = $duree;
        $this->_date = new DateTime($date);
       
    }

    //Getter
    public function getNom()
    {
        return $this->_nom;
    }
    public function getDirector()
    {
        return $this->_director;
    }
    public function getGenre()
    {
        return $this->_genre;
    }
    public function getDuree()
    {
        return $this->_duree;
    }
    public function getDate()
    {
        return $this->_date;
    }

    //Setter
    public function setNom($nom)
    {
        return $this->_nom = $nom;
    }
    public function setGenre($genre)
    {
        return $this->_genre = $genre;
    }
    public function setDuree($duree)
    {
        return $this->_duree = $duree;
    }
    public function setDate($date)
    {
        return $this->_date = $date;
    }

    //Method

    public function addCasting($casting){
        $this->_castings[] = $casting;
    }


    public function getCasting()
    {
        
        echo "Casting pour " . $this->_nom . " : <br>";

        // /!\ $casting est une instance de casting avant d'être un tableau d'objet
        foreach ($this->_castings as $casting) {

            echo  $casting->getActor().' dans le role de  '.$casting->getRole() . "<br>";
        }

    }

    public function __toString()
    {
        return $this->getNom();
    }
  

}
