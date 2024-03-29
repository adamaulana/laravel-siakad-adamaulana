<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'  => 'Alan Maulana',
            'email' => 'aln@example.com',
            'email_verified_at' => now(),
            'password'  => Hash::make('123456')
        ]);

        // $this->call([
        //     UserSeeder::class
        // ]);
    }
}
