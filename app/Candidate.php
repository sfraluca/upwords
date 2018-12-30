<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name','contact','emplyment_type','description','price','slug','profession_id','skill_id','user_id'
    ];
    public function skills()
    {
         return $this->belongsTo('App\Skill');
    }

    public function professions()
    {
         return $this->belongsTo(ProfessionCategory::class);
    }
    public function users()
    {
         return $this->belongsTo(User::class);
    }

} 
