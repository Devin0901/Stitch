<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Transaction::create([
            'transaction_id' => 1,
            'user_id' => 1,
            'tailor_id' => 1,
            'payment_method_id' => 1,
            'product_id' => 1,
            ]);

            Transaction::create([
            'transaction_id' => 2,
            'user_id' => 1,
            'tailor_id' => 2,
            'payment_method_id' => 2,
            'product_id' => 2,
            ]);

            Transaction::create([
            'transaction_id' => 3,
            'user_id' => 2,
            'tailor_id' => 3,
            'payment_method_id' => 1,
            'product_id' => 5,
            ]);

            Transaction::create([
            'transaction_id' => 5,
            'user_id' => 7,
            'tailor_id' => 3,
            'payment_method_id' => 2,
            'product_id' => 4,
            ]);
            Transaction::create([
            'transaction_id' => 6,
            'user_id' => 7,
            'tailor_id' => 3,
            'payment_method_id' => 3,
            'product_id' => 2,
            ]);
            Transaction::create([
            'transaction_id' => 7,
            'user_id' => 7,
            'tailor_id' => 1,
            'payment_method_id' => 4,
            'product_id' => 1,
            ]);
            Transaction::create([
            'transaction_id' => 8,
            'user_id' => 7,
            'tailor_id' => 2,
            'payment_method_id' => 5,
            'product_id' => 3,
                ]);
    }
}
