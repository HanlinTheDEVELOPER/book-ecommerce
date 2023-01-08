<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     CategorySeeder::class
        // ]);
        $categories = ['Action','Adventure', 'Comedy','Detective','Drama','Fiction','Horror','Romance','Sci-Fi'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }

        Book::factory(200)->create();


    }
}
