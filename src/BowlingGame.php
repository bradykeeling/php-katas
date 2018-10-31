<?php

namespace App;

class BowlingGame  
{
    protected $rolls = [];

    public function roll($pins)
    {   
        $this->guardAgainstInvalidRoll($pins);
        
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        $roll = 0;

        for ($frame=0; $frame < 10; $frame++) { 
            if ($this->isStrike($roll)) {
                $score += 10 + $this->strikeBonus($roll);
                $roll ++;
            } elseif ($this->isSpare($roll)) {
                $score += 10 + $this->spareBonus($roll);
                $roll += 2;
            } else {
                $score += $this->getDefaultFrameScore($roll);
                $roll += 2;
            }
        }

        return $score;
    }

    private function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    private function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    private function strikeBonus($roll)
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    private function spareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }

    private function getDefaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    private function guardAgainstInvalidRoll($pins)
    {
        if ($pins < 0) {
            throw new \InvalidArgumentException();
        }
    }
}