<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skill'
    ];
    public function candidates()
    {
         return $this->hasMany(Candidates::class); 
    }
    public function jobs()
    {
         return $this->hasMany(Job::class); 
    }
}
