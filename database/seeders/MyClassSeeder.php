<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define seed data for classes from nursery to 12th grade
        $classes = [
            [
                'name' => 'Nursery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'KG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '1st Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '2nd Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '3rd Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '4th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '5th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '6th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '7th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '8th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '9th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '10th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '11th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '12th Grade',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Insert seed data into classes table
        DB::table('my_classes')->insert($classes);
    }
}
