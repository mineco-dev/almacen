<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Insumo;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\presentation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(5)->create();
        User::create([
            'name' => 'Juan José',
            'email' => 'juanjosedelaguilalopez@gmail.com',
            'password' => bcrypt('12345678')
        ]); 
        Subcategory::factory(25)->create();
        Presentation::factory(15)->create();
        Insumo::factory(15)->create();
    }
}
/* App\User::create([
    'name' => 'Juan José',
    'email' => 'jjaguilal@mineco.gob.gt',
    'password' => bcrypt('12345678')
]); */