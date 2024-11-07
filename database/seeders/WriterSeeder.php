<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer as WriterModel;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WriterModel::create([
            'name' => 'Dicky',
            'image' => 'image/Dicky.jpg'
        ]);
        WriterModel::create([
            'name' => 'Garry',
            'image' => 'image/Garry.jpg'
        ]);
    }
}
