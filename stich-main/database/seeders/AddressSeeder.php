<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'user_id' => 1,
            'city' => 'Tangerang',
            'country' => 'Indonesia',
            'home' => 'Puri Permata Blok A-2',
            'postal_code' => '15122'
        ]);

            Address::create([
            'user_id' => 2,
            'city' => 'Jakarta',
            'country' => 'Indonesia',
            'home' => 'Jl. Meruya Selatan 4B',
            'postal_code' => '11650'
            ]);

            Address::create([
            'user_id' => 2,
            'city' => 'Jakarta',
            'country' => 'Indonesia',
            'home' => 'Jl.  Kosambi Raya no.5B',
            'postal_code' => '12150'
            ]);

            Address::create([
            'user_id' => 3,
            'city' => 'Jakarta',
            'country' => 'Indonesia',
            'home' => 'Jl.  Kosambi Raya no.5B',
            'postal_code' => '12150'
            ]);

            Address::create([
            'user_id' => 4,
            'city' => 'Tangerang',
            'country' => 'Indonesia',
            'home' => 'Jl.  Kav. Alam Sutera Boulevard no. 26',
            'postal_code' => '11820'
            ]);

            Address::create([
            'user_id' => 5,
            'city' => 'Tangerang',
            'country' => 'Indonesia',
            'home' => 'Jl. Ruko Gading Serpong no.5-6',
            'postal_code' => '13810'
            ]);

            Address::create([
            'user_id' => 6,
            'city' => 'Tangerang',
            'country' => 'Indonesia',
            'home' => 'Jl. Poris Gaga no. 10',
            'postal_code' => '18100'
            ]);
            Address::create([
                'user_id' => 7,
                'city' => 'Tangerang',
                'country' => 'Indonesia',
                'home' => 'Jl. Poris Gaga no. 10',
                'postal_code' => '18100'
                ]);
    }
}
