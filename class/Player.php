<?php

class Player 

{

    private string $_nom;
    private string $_prenom;
    private DateTime $_dateBD;
    private Country $country;
    private array $career;

    public function __construct($nom,$prenom,$dateBD,Country $country)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateBD = new DateTime($dateBD);
        $this->career=[];
        
  
    }

    public function get_nom()
    {
        return $this->_nom;
    }

   
    public function set_nom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    public function get_dateBD()
    {
        return $this->_dateBD;
    }

    public function set_dateBD($_dateBD)
    {
        $this->_dateBD = $_dateBD->format('Y-m-d');
        return $this;
    }
    public function getAge()
    {
        $dateJour = new DateTime();
        $date = $this->get_dateBD();
        $age = $dateJour->diff($date)->format('%y ans ');

        return $age;
    }

    public function ajoutCareer($career){
        array_push($this->career,$career);

        return $this;

    }

    public function __toString()
    {
        return  $this->get_prenom().' '.$this->get_nom().' '.$this->getAge();
    }
    

  


}





?>