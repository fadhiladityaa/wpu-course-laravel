<?php

namespace Database\Seeders;

use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => 'Web Programming',
                'slug' => 'web-programming' 
            ],
            [
                'name' => 'Agentic AI',
                'slug' => 'agentic-ai' 
            ],
            [
                'name' => 'Cyber Security',
                'slug' => 'cyber-security' 
            ],
            [
                'name' => 'Internet of Things',
                'slug' => 'internet-of-things' 
            ],
        ]);
    }
}
