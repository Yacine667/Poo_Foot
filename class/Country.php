<?php

class Country 
{

    private array $career;
    private string $nameCountry;


    public function __construct($nameCountry)
    {
        $this->nameCountry = $nameCountry;
        $this->teams= [];
    }

    public function getnameCountry()
    {
        return $this->nameCountry;
    }

    public function setnameCountry($nameCountry)
    {
        $this->nameCountry = $nameCountry;

    }

    public function getTeams()
    {
        return $this->teams;
    }

    public function setTeams($team)
    {
        return $this->teams = $team;
    }

    public function ajoutTeams($team)
    {
        array_push($this->teams,$team);

        return $this;
    }

    public function __toString()
    {
        return $this->getnameCountry();
    }

    public function showCountry(){

        echo  $this.'<br>';
        foreach ($this->teams as $team) {
            echo $team.'<br>';        
        }       
       
    }

    public function ajoutCareer($career){
        array_push($this->career,$career);

        return $this;

    }

}



?>