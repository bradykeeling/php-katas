<?php

namespace Tests;

use App\BowlingGame;
use PHPUnit\Framework\TestCase;

class BowlingGameTest extends TestCase
{
    /** @test */
    public function it_scores_a_gutter_game_as_zero()
    {
        $game = new BowlingGame;

        $this->rollTimes(20, 0, $game);

        $score = $game->score();
        
        $this->assertSame(0, $score);
    }

    /** @test */
    public function it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
    {
        $game = new BowlingGame;

        $this->rollTimes(20, 1, $game);

        $score = $game->score();

        $this->assertSame(20, $score);
    }

    /** @test */
    public function it_awards_a_one_roll_bonus_for_every_spare()
    {
        $game = new BowlingGame;

        $this->rollSpare($game);

        $game->roll(5);

        $this->rollTimes(17, 0, $game);

        $this->assertSame(20, $game->score());
    }

    /** @test */
    public function it_awards_a_two_roll_bonus_for_a_strike_in_the_previous_frame()
    {
        $game = new BowlingGame;

        // Roll a strike 
        $game->roll(10);
        
        // Followup rolls
        $game->roll(7);
        $game->roll(2);

        $this->rollTimes(17, 0, $game);

        $this->assertSame(28, $game->score());
    }

    /** @test */
    public function it_scores_a_perfect_game()
    {
        $game = new BowlingGame;

        $this->rollTimes(12, 10, $game);

        $this->assertSame(300, $game->score());
    }

    /** @test */
    public function it_takes_exception_with_invalid_rolls()
    {
        $game = new BowlingGame;

        $this->expectException(\InvalidArgumentException::class);

        $game->roll(-10);
    }

    private function rollSpare($game)
    {
        $game->roll(2);

        $game->roll(8);
    }

    private function rollTimes($count, $pins, $game)
    {
        for ($i = 0; $i < $count; $i++) { 
            $game->roll($pins);
        }
    }
}