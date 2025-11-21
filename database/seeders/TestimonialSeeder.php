<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Saul',
                'surname' => 'Goodman',
                'position' => 'CEO & Founder',
                'stars' => 5,
                'text' => 'GL, founded on April 15, 2019, has grown significantly and transformed into a group of companies by May 1, 2024. GL Group is the.',
            ],
            [
                'name' => 'Sara',
                'surname' => 'Wilson',
                'position' => 'Designer',
                'stars' => 5,
                'text' => 'GL, founded on April 15, 2019, has grown significantly and transformed into a group of companies by May 1, 2024. GL Group is the.',
            ],
            [
                'name' => 'Jena',
                'surname' => 'Karlis',
                'position' => 'Store Owner',
                'stars' => 5,
                'text' => 'GL, founded on April 15, 2019, has grown significantly and transformed into a group of companies by May 1, 2024. GL Group is the.',
            ],
            [
                'name' => 'Walter',
                'surname' => 'White',
                'position' => 'Chief Executive Officer',
                'stars' => 5,
                'text' => 'Some rightly seek the pleasure of the present things, from which we can distinguish between praise and pain.',
            ],
            [
                'name' => 'Sarah',
                'surname' => 'Johnson',
                'position' => 'Product Manager',
                'stars' => 5,
                'text' => 'The labor itself is the result of the exercise of laborious things, praising or that pains are exercise as.',
            ],
            [
                'name' => 'William',
                'surname' => 'Anderson',
                'position' => 'CTO',
                'stars' => 5,
                'text' => 'He is the smallest of them, but pain itself, indeed, which is despised in ways such as present or tque but easy at who.',
            ],
        ];

        foreach ($testimonials as $index => $item) {
            DB::table('testimonials')->insert([
                'name' => $item['name'],
                'surname' => $item['surname'],
                'position' => $item['position'],
                'stars' => $item['stars'],
                'text' => $item['text'],
                'image' => "https://picsum.photos/200/300?random=" . ($index + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
