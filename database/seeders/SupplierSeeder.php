<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
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
              'name' => 'Sushan',
            ],
            [
              'name' => 'Amin',
            ],
          ];
      
          foreach ($items as $item) {
            $supplier =  Supplier::create([
              'name' => $item['name'],
            ]);
          }
    }
}
