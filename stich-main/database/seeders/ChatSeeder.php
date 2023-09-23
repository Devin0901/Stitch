<?php

namespace Database\Seeders;

use App\Models\Chat;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Hello',
            'role'=>'user',
            'created_at'=>Carbon::create(2023,6,18,7,1,0),
        ]);


        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Hi, How can I help?',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,4,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'I want to ask you about my problem',
            'role'=>'user',
            'created_at'=>Carbon::create(2023,6,18,7,4,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'What is it?',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,5,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'So, I have a pants that is too long for me. Can you help me to change it to my height?',
            'role'=>'user',
            'created_at'=>Carbon::create(2023,6,18,7,10,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Sure, what is the material of your pants?',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,11,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Its a denim',
            'role'=>'user',
            'created_at'=>Carbon::create(2023,6,18,7,14,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Ok, sure. I can do that for you.',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,17,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'How much will it cost me?',
            'role'=>'user',
            'created_at'=>Carbon::create(2023,6,18,7,20,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'It will cost you Rp30.000,00 for 1 pants.',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,21,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'If you send 2 pants, It will be Rp25.000,00 each.',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,22,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Okay, its a deal then.',
            'role'=>'user',
            'created_at'=>Carbon::create(2023,6,18,7,22,0),
        ]);

        Chat::create([
            'user_id' => 7,
            'tailor_id'=>3,
            'detail'=>'Thankyou!',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,23,0),
        ]);
        Chat::create([
            'user_id' => 1,
            'tailor_id'=>3,
            'detail'=>'Thankyou!',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,23,0),
        ]);
        Chat::create([
            'user_id' => 2,
            'tailor_id'=>3,
            'detail'=>'Thankyou!',
            'role'=>'tailor',
            'created_at'=>Carbon::create(2023,6,18,7,23,0),
        ]);

        //
    }
}

