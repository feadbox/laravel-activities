<?php

namespace Feadbox\Activities\Eloquent\Traits;

use Feadbox\Activities\Models\Activity;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasActivities
{
    public function activities(): MorphMany
    {
        return $this->morphMany(Activity::class, 'activitiable');
    }
}
