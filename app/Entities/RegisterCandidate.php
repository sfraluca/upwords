<?php

namespace App\Entities;

use App\Candidate;

class RegisterCandidate
{

    public function register($params)
    {
        $candidate = Candidate::create([
            'name' => $params['name'],
            'contact' => $params['contact'],
        ]);

        return $candidate;
    }
}