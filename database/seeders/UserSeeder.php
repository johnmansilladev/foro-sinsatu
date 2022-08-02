<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::factory()->createQuietly([
            'name' => 'John Mansilla',
            'email' => 'johnmansillaprada@example.com',
            'username' => 'testing',
            'github_username' => 'driesvints',
            'password' => bcrypt('password'),
            'type' => User::ADMIN,
        ]);

        User::factory()->createQuietly([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'username' => 'janedoe',
            'github_username' => 'janedoe',
            'password' => bcrypt('password'),
            'type' => User::DEFAULT,
        ]);

        DB::beginTransaction();

        User::factory()
            ->count(100)
            ->has(Thread::factory()->count(2), 'threadsRelation')
            ->has(
                Article::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            [
                                'submitted_at' => now(),
                                'approved_at' => now(),
                                'hero_image' => 'sxiSod0tyYQ',
                            ],
                            ['submitted_at' => now(), 'approved_at' => now()],
                            ['submitted_at' => now()],
                        ),
                    ),
            )
            ->createQuietly();

        DB::commit();

        Article::published()
            ->inRandomOrder()
            ->take(4)
            ->update(['is_pinned' => true]);

        // Block some users...
        $admin->blockedUsers()->sync(range(20, 24));
    }
}
