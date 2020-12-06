<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(

          [
            'name'=>'J2 Samsung Galaxy',
            'description' => 'J2 Samsung Galaxy Best Smartphone with 4G Technology',
            'price' => '13000',
            'category' => 'mobile',
            'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/81qVoEhymIL._SY741_.jpg'
          ]
      );
    }
}
