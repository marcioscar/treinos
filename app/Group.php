<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];
    public function exercises(){

        return $this->hasMany(Exercise::class);
    }
}
