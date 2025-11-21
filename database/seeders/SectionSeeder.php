<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'title' => ['en' => 'OIL AND GAS'],
                'content' => ['en' => 'From upstream oil and gas production to downstream refining and petrochemical facilities, Blackwell offers a unique blend of extensive procurement capabilities and customized engineering services across all stages of the industry. We approach each project individually, delivering “fit-for-purpose” solutions that strike the optimal balance between safety, cost-effectiveness, and timely execution. We fully understand that every segment of the energy sector relies on high-quality materials to maintain continuous and efficient operations. That’s why our core mission is to be your trusted partner—delivering top-quality products on time and at the most competitive prices.'],
            ],
            [
                'title' => ['en' => 'PETROCHEMICAL'],
                'content' => ['en' => 'BlackWell specializes in the supply and distribution of various chemical products and reagents for companies operating in the petrochemical industry. Our company is committed to providing high-quality, safety-compliant products that support the continuity and efficiency of our clients’ production processes. The products we offer are carefully selected to meet industry-specific requirements and are delivered with all necessary certifications and technical documentation. At BlackWell, our mission is to be a reliable supply partner in the petrochemical sector, ensuring timely delivery and competitive pricing to meet the evolving needs of our customers.'],
            ],
            [
                'title' => ['en' => 'Renewable Energy'],
                'content' => ['en' => 'BlackWell specializes in the supply of equipment, spare parts, and technical solutions for the energy sector. We provide reliable and efficient products to companies operating in electric power, renewable energy, and industrial energy segments. Our offerings are selected in compliance with international standards, ensuring high performance, safety, and durability to meet the specific needs of our clients. With a long-term partnership approach, BlackWell contributes to the successful execution of your energy projects.'],
            ],
            [
                'title' => ['en' => 'MARINE'],
                'content' => ['en' => 'BlackWell specializes in the supply of equipment, spare parts, chemicals, and technical services for the marine industry. We provide high-quality, certified solutions tailored to the needs of shipping companies, marine terminals, offshore platforms, and other maritime infrastructure. Our offerings are selected to ensure operational reliability, compliance with safety standards, and maximum efficiency. In addition to product supply, we support our clients with field services, technical support, and prompt delivery solutions. Our mission is to be a trusted and long-term supply partner in the marine sector.'],
            ],
        ];

        foreach ($sections as $index => $section) {
            DB::table('sections')->insert([
                'title' => json_encode($section['title']),
                'content' => json_encode($section['content']),
                'image' => "https://picsum.photos/800/600?random=" . ($index + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
