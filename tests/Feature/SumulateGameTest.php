<?php

namespace Tests\Feature;


use App\Contracts\Repositories\GameRepository;
use App\Move;
use App\Services\Simulator;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SimulateGameTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_all_moves_are_available_at_start()
    {
        $game = app(GameRepository::class)->store();

        $this->assertEquals(16, count(
            app(Simulator::class)->run($game)
        ));
    }


    /** @test */
    public function test_moves_decrease_after_match()
    {
        $user = factory(User::class)->create();
        $game = app(GameRepository::class)->store();

        $match = $game->fields->where('letter', 'a');

        $move = new Move();
        $move->user_id = $user->id;
        $move->game_id = $game->id;
        $move->first_field_id = $match->first()->id;
        $move->second_field_id = $match->last()->id;
        $move->save();


        $this->assertEquals(14, count(
            app(Simulator::class)->run($game)
        ));

    }


}
