<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Move extends Model
{
    /**
     * @return BelongsTo
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function firstField()
    {
        return $this->belongsTo(Field::class);
    }

    /**
     * @return BelongsTo
     */
    public function secondField()
    {
        return $this->belongsTo(Field::class);
    }
}
