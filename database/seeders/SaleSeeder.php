<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
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
              'title' => 'Raw materials',
            ],
            [
                'title' => 'Electricity',
            ],
          ];
      
          foreach ($items as $item) {
            $product =  Sale::create([
              'title' => $item['title'],
              'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nobis mollitia consequuntur, fugit corporis sapiente, incidunt, provident quae nemo eum quidem! Facere qui voluptas molestias voluptatibus ullam recusandae, perferendis repellat!,',
              'price'=>'5000',
              'category_id'=>1,
            ]);
          }
    }
}
