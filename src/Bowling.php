<?php
namespace App;

class Bowling {
    
    private int $score = 0;

    public function newThrow ($pinsNbr) : void
    {
        $this->score += $pinsNbr;
    }

    public function getCurrentScore () : int
    {
        return $this->score;
    }
}