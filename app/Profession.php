<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
        'profession'
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
