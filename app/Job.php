<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
       'title', 'slug','employment_type','description','price','name','profession_id','skill_id'
    ];
    public function skills()
    {
         return $this->belongsTo('App\Skill');
    }

    public function professions()
    {
         return $this->belongsTo(ProfessionCategory::class);
    }
}
