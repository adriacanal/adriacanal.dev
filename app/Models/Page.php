<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    protected $casts = [
        'body' => 'string',
        'meta' => 'array',
    ];

    public function getContentAttribute()
    {
        return $this->body;
    }

}
