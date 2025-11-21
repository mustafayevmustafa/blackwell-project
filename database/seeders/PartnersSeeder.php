<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'title' => ['en' => 'GlobalTech Solutions'],
                'content' => ['en' => 'Leading provider of industrial automation and technology solutions.'],
                'image' => 'https://picsum.photos/400/300?random=1',
            ],
            [
                'title' => ['en' => 'EnergyCorp'],
                'content' => ['en' => 'Specializing in sustainable energy and oil & gas projects worldwide.'],
                'image' => 'https://picsum.photos/400/300?random=2',
            ],
            [
                'title' => ['en' => 'MarineTech'],
                'content' => ['en' => 'Offering high-quality marine equipment and technical services for shipping companies.'],
                'image' => 'https://picsum.photos/400/300?random=3',
            ],
            [
                'title' => ['en' => 'PetroChem Solutions'],
                'content' => ['en' => 'Supplier of chemical products and reagents for the petrochemical industry.'],
                'image' => 'https://picsum.photos/400/300?random=4',
            ],
            [
                'title' => ['en' => 'Renewable Innovators'],
                'content' => ['en' => 'Experts in providing equipment and solutions for renewable energy projects.'],
                'image' => 'https://picsum.photos/400/300?random=5',
            ],
        ];

        foreach ($partners as $partner) {
            DB::table('partners')->insert([
                'title' => json_encode($partner['title']),
                'content' => json_encode($partner['content']),
                'image' => $partner['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
