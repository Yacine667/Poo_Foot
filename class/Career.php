<?php

class Career 
{


    private Player $player;
    private Team $teams;
    private int $dateBegin;

    public function __construct(Player $player,Team $teams , $dateBegin)
    {

        $this->player = $player;
        $player->ajoutCareer($this);
        $this->teams = $teams;
        $teams->ajoutCareer($this);
        $this->dateBegin = $dateBegin;
    }

    public function getPlayer()
    {
            return $this->player;
    }

    public function setPlayer($player)
    {
            $this->player = $player;

            return $this;
    }

    public function getTeams()
    {
            return $this->teams;
    }

    
    public function setTeams($teams)
    {
            $this->teams = $teams;

            return $this;
    }

    public function getDateBegin()
    {
            return $this->dateBegin;
    }

    
    public function setDateBegin($dateBegin)
    {
            $this->dateBegin = $dateBegin;

            return $this;
    }

}

?>