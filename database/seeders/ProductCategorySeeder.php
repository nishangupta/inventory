<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
              'title' => 'Category1',
            ],
            [
              'title' => 'Category2',
            ],
            [
              'title' => 'Category3',
            ],
              
          ];
      
          foreach ($items as $item) {
            $category =  ProductCategory::create([
              'title' => $item['title'],
            ]);
          }
    }
}
