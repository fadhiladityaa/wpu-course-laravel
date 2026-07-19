<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'categories' => 'Web Programming',
                'slug' => 'web-programming' 
            ],
            [
                'categories' => 'Agentic AI',
                'slug' => 'agentic-ai' 
            ],
            [
                'categories' => 'Cyber Security',
                'slug' => 'cyber-security' 
            ],
            [
                'category' => 'Internet of Things',
                'slug' => 'internet-of-things' 
            ],
        ]);
    }
}
