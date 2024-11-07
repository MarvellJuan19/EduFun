<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\CategoryDetail as CategoryDetailModel;
use Faker\Factory as Faker;

class CategoryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $faker = Faker::create('id_ID'); 

        CategoryDetailModel::create([
            'category_id' => 1,
            'name' =>'Human and Computer Interaction',
            'slug' => Str::slug('Human and Cimputer Interaction'),
            'description' => "<p>". implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 1,
            'name' =>'User Experince',
            'slug' => Str::slug('User Experience'),
            'description' => "<p>". implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 1,
            'name' =>'User Experience for Digital Immersive Technology',
            'slug' => Str::slug('User Experience for Digital Immersive Technology'),
            'description' => "<p>". implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' =>'Pattern Software Design',
            'slug' => Str::slug('Pattern Software Design'),
            'description' => "<p>". implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' =>'Agile Software Development',
            'slug' => Str::slug('Agile Software Development'),
            'description' => "<p>". implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' =>'Code Reengineering',
            'slug' => Str::slug('Code Reengineering'),
            'description' => "<p>". implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
    }
}
