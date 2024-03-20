<?php

class Genre
{
    //Properties
    private string $_genre;
    private array $_films = [];

    //Constructor
    public function __construct(string $genre)
    {
        $this->_genre = $genre;
    }

    // Getter
    public function getGenre()
    {
        return $this->_genre;
    }

    //Method

    //intra
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }

    //Extra
    public function showFilms()
    {
        echo "Les films du genre " . $this->getGenre() . " : <br>";
        foreach ($this->_films as $film) {
            echo $film . "<br>";
        }
    }
}
