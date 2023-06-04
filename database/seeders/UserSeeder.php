<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [ 
                'firstname' => 'Kristian',
                'lastname' => 'Marku',
                'phone' => '049240962',
                'email' => 'admin@techx.com',
                'password' => '$2y$10$WI9QcjosbMO65TqxMVyl2.p./RYyWInvMdWiEPNb/ZJp8v7LCeZFy',
                'role_id' => 1,
            ],
            [ 
                'firstname' => 'Niki',
                'lastname' => 'Culaj',
                'phone' => '049100100',
                'email' => 'manager@techx.com',
                'password' => '$2y$10$WI9QcjosbMO65TqxMVyl2.p./RYyWInvMdWiEPNb/ZJp8v7LCeZFy',
                'role_id' => 2,
            ],
            [ 
                'firstname' => 'John',
                'lastname' => 'Doe',
                'phone' => '049111111',
                'email' => 'customer@techx.com',
                'password' => '$2y$10$WI9QcjosbMO65TqxMVyl2.p./RYyWInvMdWiEPNb/ZJp8v7LCeZFy',
                'role_id' => 3,
            ],
            [ 
                'firstname' => 'Erblin',
                'lastname' => 'Krasniqi',
                'phone' => '049240999',
                'email' => 'support@techx.com',
                'password' => '$2y$10$WI9QcjosbMO65TqxMVyl2.p./RYyWInvMdWiEPNb/ZJp8v7LCeZFy',
                'role_id' => 4,
            ],
       
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
