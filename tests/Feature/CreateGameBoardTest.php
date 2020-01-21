<?php

namespace Tests\Feature;


use App\Contracts\Repositories\GameRepository;
use App\Game;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateGameBoardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_game_create_is_persistent()
    {
        app(GameRepository::class)->store();
        $this->assertEquals(16, Game::all()->first()->fields()->count());
    }

    /** @test */
    public function test_game_board_contains_pairs_only()
    {
        $game = app(GameRepository::class)->store();

        $this->assertEquals(8, count(
            array_unique(
                $game->fields->pluck('letter')->toArray()
            )
        ));
    }
}
