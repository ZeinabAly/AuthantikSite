<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'superAdmin', 'description' => 'Le plus grand rôle, celui qui a le controle total', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'admin', 'description' => 'Le 2e grand rôle', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'manager', 'description' => 'Celui qui gère l\'application et les activités du restaurant', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'caissier',  'description' => '' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'serveur', 'description' => '' ,'created_at' => now(), 'updated_at' => now()],
            ['name' => 'user', 'description' => '' ,'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('roles')->insert($roles);
    }
}
