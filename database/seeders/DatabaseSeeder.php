<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'muhammad ridwan',
            'email' => 'ridwan@gmail.com',
            'password' => Hash::make('password')
        ]);

        Product::factory(80)->create();

        Category::create([
            'name' => 'Women Collection',
            'slug' => 'women'
        ]);

        Category::create([
            'name' => 'Men Collection',
            'slug' => 'men'
        ]);
    }
}
