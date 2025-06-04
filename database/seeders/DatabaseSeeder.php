<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create()->each(function ($user) {
            Post::factory(5)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
