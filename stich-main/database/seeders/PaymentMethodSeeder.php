<?php

namespace Database\Seeders;

use App\Models\Payment_method;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Payment_method::create([
            'payment_method_id' => 1,
            'payment_method_name' => 'OVO'
            ]);

            Payment_Method::create([
            'payment_method_id' => 2,
            'payment_method_name' => 'Virtual Account'
            ]);

            Payment_Method::create([
            'payment_method_id' => 3,
            'payment_method_name' => 'Shopee'
            ]);

            Payment_Method::create([
            'payment_method_id' => 4,
            'payment_method_name' => 'Gopay'
            ]);
            Payment_Method::create([
                'payment_method_id' => 5,
                'payment_method_name' => 'Dana'
                ]);
    }
}
