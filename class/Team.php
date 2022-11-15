<?php

class Team

{

    private string $nomTeam;
    private Country $country;
    private array $career;

    public function __construct($nomTeam, Country $country)
    {
        $this->nomTeam = $nomTeam; 
        $this-> country = $country;      
        $country -> ajoutTeams($this);
        $this->career=[];

    }

    public function getnomTeam()
    {
        return $this->nomTeam;
    }

   
    public function setnomTeam($nomTeam)
    {
        $this->nomTeam = $nomTeam;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    public function ajoutCareer($career){
        array_push($this->career,$career);

        return $this;

    }

    public function __toString(){

        return $this->getnomTeam();
    }
 
    public function showTeam(){
        echo  $this.'<br>';
        echo  $this->getCountry().'<br>';
        foreach ($this->career as $carer) {
            echo $carer->getPlayer().'('; 
            echo $carer->getDateBegin().')<br>';
    }
}

}


?>