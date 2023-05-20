<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Admin', 'description' => 'High-access management'],
            ['name' => 'Manager', 'description' => 'Medium-access management'],
            ['name' => 'Customer', 'description' => 'Customer access']
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
