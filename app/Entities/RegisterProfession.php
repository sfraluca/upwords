<?php

namespace App\Entities;

use App\Profession;

class RegisterProfession
{

    public function register($params)
    {
        $profession = Profession::create([
            'profession' => $params['profession'],
        ]);

        return $profession;
    }
}