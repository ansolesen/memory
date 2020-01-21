<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{

    /**
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    /**
     * @return HasMany
     */
    public function moves()
    {
        return $this->hasMany(Move::class);
    }


}
