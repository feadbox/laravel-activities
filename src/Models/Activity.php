<?php

namespace Feadbox\Activities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\HtmlString;
use Illuminate\Mail\Markdown;

class Activity extends Model
{
    protected $fillable = [
        'message',
    ];

    public function activitiable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getMessageMarkdownAttribute(): HtmlString
    {
        return new HtmlString(Markdown::parse($this->message));
    }
}
