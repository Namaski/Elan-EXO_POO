<?php

class Role
{
    //Properties
    private string $_nom;
    private array $_castings = [];

    //Consctructor
    public function __construct($nom)
    {
        $this->_nom = $nom;
    }

    
    //Method

    //Intra
    public function addCasting($casting)
    {
        $this->_castings[] = $casting;
    }

    //Extra
    public function listRole()
    {
        echo "Les acteurs ayant incarné " . $this->_nom . ":<br>";
        foreach ( $this->_castings as $casting) {
           echo $casting->getActor();
           echo "<br>";
        }
    }

    public function __toString()
    {
        return $this ->_nom;
    }

    

}
