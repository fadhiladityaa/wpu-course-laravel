<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Web Programming',
                'slug' => 'web-programming'

            ],
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence'

            ],
            [
                'name' => 'Robotics',
                'slug' => 'robotics'

            ],
            [
                'name' => 'Machine Learning',
                'slug' => 'machine-learning'

            ],
        ]);
    }
}
