<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $users = \App\Models\User::factory(5)->has(
            \App\Models\Serie::factory()
            ->has(
                \App\Models\Comment::factory()->count(5)
            )
            ->count(5)

        )->create();

    }
}
