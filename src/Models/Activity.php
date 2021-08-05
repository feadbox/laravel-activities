<?php

namespace Feadbox\Activities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Activity extends Model
{
    protected $fillable = [
        'message',
    ];

    public function activitiable(): MorphTo
    {
        return $this->morphTo();
    }
}
