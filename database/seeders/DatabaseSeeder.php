<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        $this->call([RoleSeeder::class,UserSeeder::class]);
        //$this->call(UserSeeder::class);
       
    }
}
