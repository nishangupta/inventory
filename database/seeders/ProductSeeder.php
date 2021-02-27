<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
              'title' => 'Laptop',
            ],
            [
              'title' => 'Charger',
            ],
            [
                'title' => 'Book',
            ],
              
          ];
      
          foreach ($items as $item) {
            $product =  Product::create([
              'product_category_id'=>1,
              'title' => $item['title'],
              'price'=>'5000',
              'qty'=>'10',
              'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptate optio molestiae tempora deleniti cupiditate, nihil ad doloremque obcaecati ex.'
            ]);
          }
    }
}
