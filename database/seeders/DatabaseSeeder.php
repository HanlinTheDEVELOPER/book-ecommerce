<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\BookCategory;
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

        $authors = ['Chit Oo Nyo', 'Tatkatho Phone Naing', 'A Kyi Taw', 'Thein Phay Myint', 'Khat Zaw', 'Toe Saung', 'Thu Way', 'Juu'];
        foreach ($authors as $author) {
            Author::create([
                'name' => $author
            ]);
        }

        Publisher::factory(15)
            ->has(Book::factory()
                ->has(AdditionalBookinfo::factory(1))
                ->count(12))
            ->create();
        BookCategory::factory(100)->create();
    }
}