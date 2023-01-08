<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Action','Adventure', 'Comedy','Detective','Drama','Fiction','Horror','Romance','Sci-Fi'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}