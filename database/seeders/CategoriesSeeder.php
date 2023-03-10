<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category' => 'Admin',
        ]);
        Category::create([
            'category' => 'Gerente',
        ]);
        Category::create([
            'category' => 'Normal',
        ]);
    }
}
