<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => ['en' => 'Understanding Oil & Gas Industry'],
                'content' => ['en' => 'From upstream production to downstream refining, this article covers the main stages of the oil and gas industry.'],
                'image' => 'https://picsum.photos/400/300?random=1',
                'slug' => 'understanding-oil-gas-industry',
            ],
            [
                'title' => ['en' => 'Petrochemical Innovations'],
                'content' => ['en' => 'Exploring modern innovations in the petrochemical sector that enhance efficiency and safety.'],
                'image' => 'https://picsum.photos/400/300?random=2',
                'slug' => 'petrochemical-innovations',
            ],
            [
                'title' => ['en' => 'Renewable Energy Trends'],
                'content' => ['en' => 'How renewable energy is reshaping the energy sector and what technologies lead the way.'],
                'image' => 'https://picsum.photos/400/300?random=3',
                'slug' => 'renewable-energy-trends',
            ],
            [
                'title' => ['en' => 'Marine Industry Solutions'],
                'content' => ['en' => 'High-quality solutions for shipping, offshore platforms, and marine infrastructure.'],
                'image' => 'https://picsum.photos/400/300?random=4',
                'slug' => 'marine-industry-solutions',
            ],
            [
                'title' => ['en' => 'Digital Transformation in Energy'],
                'content' => ['en' => 'The role of digital technologies in optimizing operations across the energy sector.'],
                'image' => 'https://picsum.photos/400/300?random=5',
                'slug' => 'digital-transformation-energy',
            ],
        ];

        foreach ($blogs as $blog) {
            DB::table('blogs')->insert([
                'title' => json_encode($blog['title']),
                'content' => json_encode($blog['content']),
                'image' => $blog['image'],
                'slug' => $blog['slug'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
