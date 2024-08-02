<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['id' => Role::ADMIN, 'name' => 'Administrateur']);
        Role::create(['id' => Role::USER, 'name' => 'Utilisateur']);
    }
}