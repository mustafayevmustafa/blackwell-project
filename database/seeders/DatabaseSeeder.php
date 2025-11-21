<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TeamSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PanaProductSeeder::class);
        $this->call(BlogsSeeder::class);
        $this->call(PartnersSeeder::class);
    }
}
