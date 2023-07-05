<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              // Define the data for the menus
              $menus = [
                [
                    'category_id' => 1,
                    'name' => 'Menu 1',
                    'image' => 'menu1.jpg',
                    'price' => 10,
                    'category' => 'Category 1',
                    'description' => 'Menu 1 description',
                    'slug' => 'menu-1',
                ],
                [
                    'category_id' => 2,
                    'name' => 'Menu 2',
                    'image' => 'menu2.jpg',
                    'price' => 15,
                    'category' => 'Category 2',
                    'description' => 'Menu 2 description',
                    'slug' => 'menu-2',
                ],
            ];
    
            // Insert the data into the menus table
            foreach ($menus as $menu) {
                Menu::create($menu);
            }
    }
}
