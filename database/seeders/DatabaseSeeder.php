<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use App\Models\AdditionalBookinfo;
use Database\Seeders\CategorySeeder;
use Database\Factories\PublisherFactory;
use Database\Factories\AdditionalBookinfoFactory;

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
        $categories = ['Action', 'Adventure', 'Comedy', 'Detective', 'Drama', 'Fiction', 'Horror', 'Romance', 'Sci-Fi'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
        Publisher::factory(15)
            ->has(Book::factory()
                ->has(AdditionalBookinfo::factory(1))
                ->count(12))
            ->create();
    }
}