<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories as CategoryModel;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryModel::create([
            'writer_id' => 1,
            'name' => 'Interactive Multimedia',
            'slug' => 'interactive-multimedia'
        ]);

        CategoryModel::create([
            'writer_id' => 2,
            'name' => 'Software Engineering',
            'slug' => 'software-engineering'
        ]);
    }
}
