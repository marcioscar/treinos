<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'description',
        'repetition',
        'charge',
        'week',
        'group_id',
        'image'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
