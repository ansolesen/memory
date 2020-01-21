<?php


namespace App\Repositories;


use App\Field;
use App\Game;

class GameRepository implements \App\Contracts\Repositories\GameRepository
{

    public static $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
    /**
     * @var int
     */

    /**
     * @var int
     */
    private static $BOARD_SIZE = 4;

    /**
     * @inheritDoc
     */
    public function all()
    {
        return Game::all();
    }

    /**
     * @inheritDoc
     */
    public function store($data = [])
    {
        $game = Game::create($data);

        self::initializeBoard($game);

        return $game;
    }

    /**
     * @param Game $game
     *
     * @return Game
     */
    private static function initializeBoard(Game $game)
    {
        $fields = [];

        $letterStack = collect(
            array_merge(self::$alphabet, self::$alphabet)
        )->shuffle();


        for ($x = 0; $x < self::$BOARD_SIZE * self::$BOARD_SIZE; $x++) {

            $field = new Field();
            $field->letter = $letterStack->pop();
            $fields[] = $field;

        }

        $game->fields()->saveMany($fields);

        return $game;
    }


}