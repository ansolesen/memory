<?php


namespace App\Services;


use App\Field;
use App\Game;

class Simulator
{

    /**
     * @var mixed
     */
    public $availableFields;


    /**
     *  Run the simulation
     *
     * @param Game $game
     *
     * @return mixed
     */
    public function run(Game $game)
    {
        $this->availableFields = $game->fields;

        foreach ($game->moves as $move) {

            $firstField = $move->firstField;
            $secondField = $move->secondField;

            if ($this->isMatching($firstField, $secondField)) {
                $this->removeFromAvailableFields($firstField);
                $this->removeFromAvailableFields($secondField);
                // TODO: Add score?
            }
        }

        return $this->availableFields;
    }

    /**
     * @param $firstField
     * @param $secondField
     *
     * @return bool
     */
    public function isMatching(Field $firstField, Field $secondField)
    {
        return $firstField->letter === $secondField->letter;
    }


    /**
     * @param Field $field
     */
    public function removeFromAvailableFields(Field $field)
    {
        $this->availableFields = $this->availableFields
            ->filter(function ($availableField) use ($field) {
                return $availableField->id !== $field->id;
            });
    }


}