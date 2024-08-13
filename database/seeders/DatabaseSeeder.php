<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  User::factory(5)
        //  ->has(Post::factory(10))
        //  ->create();

       // User::factory()->count(2)->create();
 // Seed users
 \App\Models\User::factory(10)->create();

 // Seed posts for each user
 $users = User::all();

 foreach ($users as $user) {
     Post::factory()->count(5)->create([
         'user_id' => $user->id,
     ]);
 }
        

    }
}
