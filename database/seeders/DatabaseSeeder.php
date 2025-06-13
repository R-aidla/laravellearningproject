<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        Job::factory(12)->create();


        User::factory()->unverified()->create([
            'name' => 'Rivo Aidla',
            'email' => 'appbountybots@gmail.com',
        ]);
    }
}
