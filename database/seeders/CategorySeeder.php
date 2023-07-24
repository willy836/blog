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
        $seedCategories = [
            [
                'cat' => 'Category One'
            ],
            [
                'cat' => 'Category Two'
            ]
        ];

        foreach($seedCategories as $category){
            Category::create($category);
        };
    }
}
