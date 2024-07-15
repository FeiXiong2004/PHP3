<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10 ; $i++) {
            DB::table('books')->insert([
                'title' => "Books" . $i,
               'author' => "PucaChino",
               'publisher' => "PucaShop",
               'publication' => fake()->date(),
               'price' => rand(20,50),
               'quantity' => rand(1,10),
               'category_id' => rand(1,5)
            ]);
        }

    
    }
}
