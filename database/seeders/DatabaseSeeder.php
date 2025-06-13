<?php

namespace Database\Seeders;

use App\Models\Webinar;
use App\Models\Branch;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Contact::factory(count: 100)->create();
        // Question::factory(100)->create();



        Webinar::factory(100)->create();
        // Branch::factory(count: 50)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'contact@mmp.com',
        // ]);
    }
}
