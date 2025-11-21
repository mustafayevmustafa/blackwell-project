<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'full_name' => 'Walter White',
                'position' => 'Chief Executive Officer',
                'content' => 'Some rightly seek the pleasure of the present things, from which we can distinguish between praise and pain.',
            ],
            [
                'full_name' => 'Sarah Johnson',
                'position' => 'Product Manager',
                'content' => 'The labor itself is the result of the exercise of laborious things, praising or that pains are exercise as.',
            ],
            [
                'full_name' => 'William Anderson',
                'position' => 'CTO',
                'content' => 'He is the smallest of them, but pain itself, indeed, which is despised in ways such as present or tque but easy at who.',
            ],
            [
                'full_name' => 'Amanda Jepson',
                'position' => 'Accountant',
                'content' => 'Great pleasure we accuse to assume with unless or who pain pleasure but and pardon as if than consectetur.',
            ],
            [
                'full_name' => 'Brian Doe',
                'position' => 'Marketing',
                'content' => 'Those who follow whom we accuse, great where is the annoyance of it, are laborious with pains because it hinders the labors of the will.',
            ],
            [
                'full_name' => 'Josepha Palas',
                'position' => 'Operation',
                'content' => 'Let there be, let.',
            ],
        ];

        foreach ($teams as $index => $team) {
            DB::table('teams')->insert([
                'full_name' => $team['full_name'],
                'position' => $team['position'],
                'content' => $team['content'],
                'image' => "https://picsum.photos/200/300",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
