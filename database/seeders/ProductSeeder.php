<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'title' => ['en' => 'Oil Filter', 'az' => 'Yağ Filteri'],
                'content' => ['en' => 'High-quality oil filter for engines.', 'az' => 'Mühərriklər üçün yüksək keyfiyyətli yağ filteri.'],
                'price' => 49.99,
                'count' => 100,
            ],
            [
                'category_id' => 2,
                'title' => ['en' => 'Hydraulic Pump', 'az' => 'Hidravlik Pompa'],
                'content' => ['en' => 'Reliable hydraulic pump for industrial use.', 'az' => 'Sənaye istifadəsi üçün etibarlı hidravlik pompa.'],
                'price' => 249.50,
                'count' => 20,
            ],
            [
                'category_id' => 3,
                'title' => ['en' => 'Petrochemical Valve', 'az' => 'Petrokimya Klapanı'],
                'content' => ['en' => 'Valve suitable for chemical applications.', 'az' => 'Kimyəvi tətbiqlər üçün uyğundur.'],
                'price' => 79.90,
                'count' => 50,
            ],
            [
                'category_id' => 1,
                'title' => ['en' => 'Engine Oil', 'az' => 'Mühərrik Yağı'],
                'content' => ['en' => 'Synthetic engine oil for all types of vehicles.', 'az' => 'Bütün növ nəqliyyat vasitələri üçün sintetik mühərrik yağı.'],
                'price' => 29.99,
                'count' => 200,
            ],
            [
                'category_id' => 2,
                'title' => ['en' => 'Gearbox', 'az' => 'Sürət Qutusu'],
                'content' => ['en' => 'Durable gearbox for industrial machinery.', 'az' => 'Sənaye maşınları üçün davamlı sürət qutusu.'],
                'price' => 499.99,
                'count' => 10,
            ],
            [
                'category_id' => 3,
                'title' => ['en' => 'Chemical Reactor', 'az' => 'Kimyəvi Reaktor'],
                'content' => ['en' => 'Reactor for safe chemical processing.', 'az' => 'Təhlükəsiz kimyəvi emal üçün reaktor.'],
                'price' => 1299.99,
                'count' => 5,
            ],
            [
                'category_id' => 1,
                'title' => ['en' => 'Fuel Injector', 'az' => 'Yanacaq İnjektoru'],
                'content' => ['en' => 'High-precision fuel injector.', 'az' => 'Yüksək dəqiqlikli yanacaq injektoru.'],
                'price' => 149.99,
                'count' => 75,
            ],
            [
                'category_id' => 2,
                'title' => ['en' => 'Pump Seal', 'az' => 'Pompa Sızdırmazlığı'],
                'content' => ['en' => 'Seal for hydraulic pumps.', 'az' => 'Hidravlik pompalar üçün sızdırmazlıq.'],
                'price' => 19.99,
                'count' => 150,
            ],
            [
                'category_id' => 3,
                'title' => ['en' => 'Pipeline Hose', 'az' => 'Borular üçün Şlanq'],
                'content' => ['en' => 'Flexible hose for industrial pipelines.', 'az' => 'Sənaye boruları üçün çevik şlanq.'],
                'price' => 39.99,
                'count' => 120,
            ],
            [
                'category_id' => 1,
                'title' => ['en' => 'Air Filter', 'az' => 'Hava Filteri'],
                'content' => ['en' => 'Filter for clean airflow in engines.', 'az' => 'Mühərriklərdə təmiz hava axını üçün filter.'],
                'price' => 24.99,
                'count' => 180,
            ],
        ];

        foreach ($products as $index => $product) {
            DB::table('products')->insert([
                'category_id' => $product['category_id'],
                'slug' => Str::slug($product['title']['en']),
                'title' => json_encode($product['title']),
                'content' => json_encode($product['content']),
                'price' => $product['price'],
                'count' => $product['count'],
                'image' => "https://picsum.photos/400/300?random=" . ($index + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
