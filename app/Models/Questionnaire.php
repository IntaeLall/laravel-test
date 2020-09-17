<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Questionnaire extends Model
{
    protected $fillable = ['name'];

    /**
     * @return HasMany
     */
    public function questionnaire(): HasMany
    {
        return $this->has(Questionnaire::class);
    }
}
