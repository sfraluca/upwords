<?php

namespace App\Entities;

use App\Skill;

class RegisterSkill
{

    public function register($params)
    {
        $skill = Skill::create([
            'skill' => $params['skill'],
        ]);

        return $skill;
    }
}