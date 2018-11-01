<?php

namespace Tests;

use App\TennisMatch;
use App\TennisPlayer;
use PHPUnit\Framework\TestCase;

class TennisMatchTest extends TestCase
{
    protected function setUp()
    {
        $this->john = new TennisPlayer('John Doe', 0);
        $this->jane = new TennisPlayer('Jane Doe', 0);
        $this->match = new TennisMatch($this->john, $this->jane);
    }
    
    /** @test */
    public function it_scores_a_scoreless_game()
    {
        $this->assertEquals('Love-All', $this->match->score());
    }

    /** @test */
    public function it_scores_a_1_0_game()
    {
        $this->john->earnPoints(1);

        $this->assertEquals('Fifteen-Love', $this->match->score());
    }

    /** @test */
    public function it_scores_a_2_0_game()
    {
        $this->john->earnPoints(2);

        $this->assertEquals('Thirty-Love', $this->match->score());
    }

    /** @test */
    public function it_scores_a_3_0_game()
    {
        $this->john->earnPoints(3);

        $this->assertEquals('Forty-Love', $this->match->score());
    }

    /** @test */
    public function it_scores_a_4_0_game()
    {
        $this->john->earnPoints(4);

        $this->assertEquals('Win for John Doe', $this->match->score());
    }

    /** @test */
    public function it_scores_a_0_4_game()
    {
        $this->jane->earnPoints(4);

        $this->assertEquals('Win for Jane Doe', $this->match->score());
    }

    /** @test */
    public function it_scores_a_4_3_game()
    {
        $this->john->earnPoints(4);
        $this->jane->earnPoints(3);

        $this->assertEquals('Advantage John Doe', $this->match->score());
    }

     /** @test */
     public function it_scores_a_3_3_game()
     {
         $this->john->earnPoints(3);
         $this->jane->earnPoints(3);
 
         $this->assertEquals('Deuce', $this->match->score());
     }

    /** @test */
    public function it_scores_a_4_4_game()
    {
        $this->john->earnPoints(4);
        $this->jane->earnPoints(4);

        $this->assertEquals('Deuce', $this->match->score());
    }

    /** @test */
    public function it_scores_a_8_8_game()
    {
        $this->john->earnPoints(8);
        $this->jane->earnPoints(8);

        $this->assertEquals('Deuce', $this->match->score());
    }

    /** @test */
    public function it_scores_a_8_10_game()
    {
        $this->john->earnPoints(8);
        $this->jane->earnPoints(10);

        $this->assertEquals('Win for Jane Doe', $this->match->score());
    }
}