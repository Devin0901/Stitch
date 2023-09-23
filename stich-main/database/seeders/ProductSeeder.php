<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_id' => 1,
            'user_id' => 1,
            'tailor_id' => 1,
            'product_name' => 'Jeans',
            'productprice' => 20000
            ]);

            Product::create([
            'product_id' => 2,
            'user_id' => 1,
            'tailor_id' => 2,
            'product_name' => 'Wedding Tuxedo',
            'productprice' => 3500000
            ]);

            product::create([
            'product_id' => 3,
            'user_id' => 2,
            'tailor_id' => 3,
            'product_name' => 'Uniqlu Shirt',
            'productprice' => 15000
            ]);

            Product::create([
            'product_id' => 4,
            'user_id' => 2,
            'tailor_id' => 4,
            'product_name' => 'Anime Dress',
            'productprice' => 300000
            ]);

      Product::create([
                'product_id' => 5,
                'user_id' => 2,
                'tailor_id' => 2,
                'product_name' => 'Anime Shirt',
                'productprice' => 250000
                ]);

      Product::create([
                'product_id' => 6,
                'user_id' => 1,
                'tailor_id' => 3,
                'product_name' => 'Anime Pants',
                'productprice' => 250000
                ]);

      Product::create([
                'product_id' => 7,
                'user_id' => 2,
                'tailor_id' => 1,
                'product_name' => 'Anime Oversized',
                'productprice' => 250000
                ]);

      Product::create([
                'product_id' => 8,
                'user_id' => 1,
                'tailor_id' => 2,
                'product_name' => 'Girl Dress',
                'productprice' => 300000
                ]);

      Product::create([
                'product_id' => 9,
                'user_id' => 2,
                'tailor_id' => 3,
                'product_name' => 'Vintage Dress',
                'productprice' => 300000
                ]);

      Product::create([
                'product_id' =>10,
                'user_id' => 1,
                'tailor_id' => 4,
                'product_name' => 'Dora Dress',
                'productprice' => 250000
                ]);

      Product::create([
                'product_id' => 11,
                'user_id' => 2,
                'tailor_id' => 1,
                'product_name' => 'Vintage Shirt',
                'productprice' => 300000
                ]);

      Product::create([
                'product_id' => 12,
                'user_id' => 1,
                'tailor_id' => 2,
                'product_name' => 'Vintage Pants',
                'productprice' => 250000
                ]);

      Product::create([
                'product_id' => 13,
                'user_id' => 2,
                'tailor_id' => 3,
                'product_name' => 'Dora Pants',
                'productprice' => 300000
                ]);

      Product::create([
                'product_id' => 14,
                'user_id' => 1,
                'tailor_id' => 4,
                'product_name' => 'Oversized Shirt',
                'productprice' => 250000
                ]);
    }
}
