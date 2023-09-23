<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        History::create([
            'history_id' => 1,
            'user_id' => 1,
            'product_id' => 1
            ]);

            History::create([
            'history_id' => 2,
            'user_id' => 1,
            'product_id' => 2
            ]);

            History::create([
            'history_id' => 3,
            'user_id' => 2,
            'product_id' => 3
            ]);

            History::create([
            'history_id' => 4,
            'user_id' => 2,
            'product_id' => 4
            ]);
    }
}
