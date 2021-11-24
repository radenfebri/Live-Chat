<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'username' => 'radenfebri',
                'name' => 'RadenFebri',
                'email' => 'febriye12@gmail.com',
                'password' => bcrypt('Febri2303'),
            ],

            [
                'username' => 'user',
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('Febri2303'),
            ],
            
        ])->each(function ($user) {
            User::create($user);
        });

        \App\Models\User::factory(10)->create();
    }
}
