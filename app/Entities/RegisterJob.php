<?php

namespace App\Entities;

use App\Job;

class RegisterJob
{

    public function register($params)
    {
        $job = Job::create([
            'title' => $params['title'],
            'slug' => $params['slug'],
            'employment_type' => $params['employment_type'],
            'description' => $params['description'],
            'price' => $params['price'],
            'name' => $params['name'],
            'skill_id' => $params['skill_id'],
            'profession_id' => $params['profession_id'],
        ]);
        return $job;
    }
}