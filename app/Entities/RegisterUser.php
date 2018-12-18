<?php

namespace App\Entities;

use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterUser
{

    public function register($params)
    {
        $user = User::create([
            'name' => $params['name'],
            'email' => $params['email'],
            'password' => Hash::make($params['password']),
        ]);
        
        $user->roles()->attach($params['role']);

        return $user;
    }
}