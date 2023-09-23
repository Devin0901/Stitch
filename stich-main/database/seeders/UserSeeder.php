<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_id' => 1,
            'firstname' => 'Tubagus',
            'lastname' => 'Simorang',
            'username' => 'tubagussimorang12',
            'email' => 'tubagussimorang@gmail.com',
            'password' => 'tbgsmorng1202',
            'gender' => 'male',
            'phone_number' => '081252667189',
            'description' => 'Halo, ini dengan Tubagus, silahkan reach out ke saya via email kalau butuh bantuan',
            'isTailor'=>false
            ]);

            User::create([
            'user_id' => 2,
            'firstname' => 'Jake',
            'lastname' => 'Sinaga',
            'username' => 'jakesinaga',
            'email' => 'jakesinaga@gmail.com',
            'password' => 'J2052ABC',
            'gender' => 'male',
            'phone_number' => '085217728172',
            'description' => 'Software Engineer at BINUS University',
            'isTailor'=>false
            ]);

            User::create([
            'user_id' => 3,
            'firstname' => 'Asep',
            'lastname' => 'Bagus',
            'username' => 'asepbgs212',
            'email' => 'asep.bgs212@gmail.com',
            'password' => 'asep1234',
            'gender' => 'male',
            'phone_number' => '081234628141',
            'description' => 'Asep Bagus Page',
            'isTailor'=>true
            ]);

            User::create([
            'user_id' => 4,
            'firstname' => 'Jessica',
            'lastname' => 'Grace',
            'username' => 'jessiegrace',
            'email' => 'jessiegrace05@gmail.com',
            'password' => 'jeSsgrAce05',
            'gender' => 'female',
            'phone_number' => '082212726152',
            'description' => 'Welcome to Jessies Wedding Custom! Please inquire if you want to ask anything!',
            'isTailor'=>true
            ]);

            User::create([
            'user_id' => 5,
            'firstname' => 'Chloie',
            'lastname' => 'Saputra',
            'username' => 'chloiesa',
            'email' => 'chlosa202@gmail.com',
            'password' => Hash::make('chloe123'),
            'gender' => 'female',
            'phone_number' => '0821128273623',
            'description' => 'This is Chloie here, you can contact me if you need anything.',
            'isTailor'=>true
            ]);

            User::create([
            'user_id' => 6,
            'firstname' => 'Radit',
            'lastname' => 'Mikael',
            'username' => 'raditmikael',
            'email' => 'raditmikagans@gmail.com',
            'password' => 'rara20152020',
            'gender' => 'male',
            'phone_number' => '081226661729',
            'description' => 'Hello, rads here! Please dm me if u need anything! Always available 24/7!',
            'isTailor'=>true
            ]);
                User::create([
                'user_id' => 7,
                'username' => 'devin123',
                'firstname'=>'devin',
                'lastname'=>'saan',
                'email' => 'devin@gmail.com',
                'password' => Hash::make('devin123'),
                'gender' => 'male',
                'phone_number' => '085217728172',
                'description' => 'Software Engineer at BINUS University'
                ]);
    }
}
