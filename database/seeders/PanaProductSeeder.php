<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PanaProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'title' => ['en' => 'Flare IQ'],
                'description' => [
                    'en' => 'Reducing greenhouse gas emissions, including methane, is essential in mitigating global warming. Panametrics’ flare.IQ technology enables effective monitoring, reduction, and control of flaring emissions.'
                ],
                'image' => 'https://picsum.photos/400/300?random=1',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 1,
            ],
            [
                'title' => ['en' => 'DigitalFlow'],
                'description' => [
                    'en' => 'The DigitalFlow GF868 ultrasonic flowmeter uses Correlation Transit-Time™, digital signal processing, and accurate molecular weight calculation. Reliable, high-accuracy, no routine maintenance required.'
                ],
                'image' => 'https://picsum.photos/400/300?random=2',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 2,
            ],
            [
                'title' => ['en' => 'Gas Flowmeter'],
                'description' => [
                    'en' => 'The TransPort PT878GC portable gas flowmeter measures most gases including natural gas, compressed air, fuel gases, erosive and corrosive gases, and air separation gases. Easy to install, no downtime required.'
                ],
                'image' => 'https://picsum.photos/400/300?random=3',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 3,
            ],
            [
                'title' => ['en' => 'Process Analyzers'],
                'description' => [
                    'en' => 'Panametrics moisture analyzers detect leaks in gas processes and pressurized pipeline systems. Ensure process safety and trace moisture monitoring.'
                ],
                'image' => 'https://picsum.photos/400/300?random=4',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 4,
            ],
            [
                'title' => ['en' => 'Oxygen & Gas Measurement'],
                'description' => [
                    'en' => 'The XMO2pro SIL certified oxygen analyzer provides highly accurate oxygen measurements in harsh industrial environments. Minimal maintenance required.'
                ],
                'image' => 'https://picsum.photos/400/300?random=5',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 5,
            ],
            [
                'title' => ['en' => 'DigitalFlow XGF868i'],
                'description' => [
                    'en' => 'Compact explosion-proof transmitter version of the Panametrics DigitalFlow GF868 flare gas mass flowmeter. Ideal for offshore installations and downstream petrochemical plants.'
                ],
                'image' => 'https://picsum.photos/400/300?random=6',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 6,
            ],
            [
                'title' => ['en' => 'SOLUTIONS FOR DRILLING 1'],
                'description' => [
                    'en' => 'We assist drilling companies with high-quality surface equipment. Extensive product portfolio, competitive pricing, technical support, and consultation.'
                ],
                'image' => 'https://picsum.photos/400/300?random=7',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 7,
            ],
            [
                'title' => ['en' => 'SOLUTIONS FOR DRILLING 2'],
                'description' => [
                    'en' => 'Full selection of tools for drilling. Strengthen bottom line with global top-brand equipment and services for oil & gas drilling companies.'
                ],
                'image' => 'https://picsum.photos/400/300?random=8',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 8,
            ],
            [
                'title' => ['en' => 'SOLUTIONS FOR DRILLING 3'],
                'description' => [
                    'en' => 'Our years of experience ensure favorable results for drilling companies. Strong supplier relationships provide a wide selection of high-quality products.'
                ],
                'image' => 'https://picsum.photos/400/300?random=9',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 9,
            ],
            [
                'title' => ['en' => 'SOLUTIONS FOR DRILLING 4'],
                'description' => [
                    'en' => 'Providing drilling companies with reliable equipment and technical support. Extensive product portfolio, competitive pricing, and consultation services included.'
                ],
                'image' => 'https://picsum.photos/400/300?random=10',
                'datasheet' => 'assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf',
                'order' => 10,
            ],
        ];

        foreach ($products as $product) {
            DB::table('pana_products')->insert([
                'title' => json_encode($product['title']),
                'description' => json_encode($product['description']),
                'image' => $product['image'],
                'datasheet' => $product['datasheet'],
                'order' => $product['order'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
