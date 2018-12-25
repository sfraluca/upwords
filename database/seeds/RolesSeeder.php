<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidate = Role::create([
            'name' => 'Candidate',
            'slug'=> 'candidate',
            'permissions' => json_encode([
                'create-candidate' => true,
                'update-candidate' => true,
                'delete-candidate' => true,
                'index-vacancy' => true,
                'show-candidate' => true,
            ]),
        ]);
        
        $editor = Role::create([
            'name' => 'Vacancy',
            'slug'=> 'vacancy',
            'permissions' => json_encode([
                'create-vacancy' => true,
                'update-vacancy' => true,
                'delete-vacancy' => true,
                'index-candidate' => true,
                'show-vacancy' => true,
            ]),
        ]);
    }
}
