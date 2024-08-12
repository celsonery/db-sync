<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'DevOps Bagarote',
            'email' => 'devops@bagarote.com.br',
            'password' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Celso Nery',
            'email' => 'celso@karyon.com.br',
            'password' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Marlon Xavier',
            'email' => 'marlon@karyon.com.br',
            'password' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'José Rosaldo',
            'email' => 'jose@karyon.com.br',
            'password' => Str::random(10),
        ]);
    }
}
