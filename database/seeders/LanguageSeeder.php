<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define seed data for languages
        $languages = [
            [
                'name' => 'English',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hindi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Spanish',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'French',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Add more languages as needed
        ];

        // Insert seed data into languages table
        DB::table('languages')->insert($languages);
    }
}
