<?php

namespace Feadbox\Activities\Eloquent\Traits;

use Feadbox\Activities\Contracts\ActivityContract;
use Feadbox\Activities\Models\Activity;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasActivities
{
    public function activities(): MorphMany
    {
        return $this->morphMany(Activity::class, 'activitiable');
    }

    public function latestActivities(): MorphMany
    {
        return $this->activities()->latest('id');
    }

    public function activity(ActivityContract $activity): Activity
    {
        return $this->activities()->create(['message' => $activity->message()]);
    }
}
