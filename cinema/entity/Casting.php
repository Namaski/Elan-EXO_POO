<?php

class Casting
{
    // Properties 
    private Film $_film;
    private Actor $_actor;
    private Role $_role;

    // Construct
    public function __construct(Film $film, Actor $actor, Role $role)
    {

        $this->_film = $film;

        $this->_actor = $actor;

        $this->_role = $role;


        $film->addCasting($this);
        $actor->addCasting($this);
        $role->addCasting($this);
    }

    // GETTER
    public function getFilm()
    {
        return $this->_film;
    }
    public function getActor()
    {
        return $this->_actor;
    }
    public function getRole()
    {
        return $this->_role;
    }
    
    // SETTER
    public function setFilm($film)
    {
        $this->_film = $film;
    }
    public function setActor($actor)
    {
        $this->_actor = $actor;
    }
    public function setRole($role)
    {
       $this->_role = $role;
    }

    // Method

    public function addFilm(Film $film)
    {
        $this->_film = $film;
    }
    public function addActor(Actor $actor)
    {

        $this->_actor = $actor;
    }

    public function addRole(Role $role)
    {

        $this->_role = $role;
    }
}
