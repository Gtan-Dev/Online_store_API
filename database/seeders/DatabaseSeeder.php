<?php

namespace Database\Seeders;
use App\Models\Categories;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Categories::create([
            'name' => 'Computer',
            'lft' => 1,
            'rgt' => 10,
        ]);

        Categories::create([
            'name' => 'Mouse',
            'lft' => 11,
            'rgt' => 20,
        ]);

        Categories::create([
            'name' => 'Keyboard',
            'lft' => 21,
            'rgt' => 30,
        ]);
    }
}
