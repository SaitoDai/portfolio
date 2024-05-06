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
        $categories = ['2DCG', '3DCG', '3D Animation', 'Analog Painting or Drawing', 'Metal Craft', 'Programming'];

        foreach($categories as $c){
            $category = new Category();
            $category->name = $c;
            $category->save();
        }

    }
}
