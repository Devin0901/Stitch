<?php

namespace Database\Seeders;

use App\Models\Tailor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TailorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tailor::create([
            'tailor_id' => 1,
            'user_id' => 3,
            'tailor_experience' => 'Berpengalaman selama 6 tahun permak di dekat pasar Kosambi, bisa request mau perbaikan apa sesuai selera. Harga mulai dari 15.000',
            'custom_cloth'=>true,
            'fix_cloth'=>true,
            'starting_price'=>'50000',
            'rating'=>'3.5'
            ]);

            Tailor::create([
            'tailor_id' => 2,
            'user_id' => 4,
            'tailor_experience' => 'Professional Wedding Dress maker for over 10 years, you can see my full portofolio in my Insta. Price starts from 5.000.000 and increases according to your requests',            'custom_cloth'=>true,
            'fix_cloth'=>true,
            'starting_price'=>'50000',
            'rating'=>'4.5'

            ]);

            Tailor::create([
            'tailor_id' => 3,
            'user_id' => 5,
            'tailor_experience' => 'Penjahit rumahan berdomisili di dekat Gading Serpong, silahkan kalau ingin bertanya-tanya soal harga dan perbaikan. Harga dimulai dari 12.000',
            'custom_cloth'=>true,
            'fix_cloth'=>true,
            'starting_price'=>'50000',
            'rating'=>'4.5'
            ]);

            Tailor::create([
            'tailor_id' => 4,
            'user_id' => 6,
            'tailor_experience' => 'Custom cosplay clothes maker, you can dm me for pricelist and ask me about the deadline for you clothes. Price starts from 300.000',
            'custom_cloth'=>true,
            'fix_cloth'=>true,
            'starting_price'=>'50000',
            'rating'=>'4.9'
            ]);
        //
    }
}
