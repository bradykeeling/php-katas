<?php

namespace App;

class TennisPlayer  
{
    public $name;
    public $points;

    public function __construct($name, $points = 0) {
        $this->name = $name;
        $this->points = $points;
    }

    public function earnPoints($points)
    {
        $this->points += $points;
    }
}
