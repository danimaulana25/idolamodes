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
        DB::table('products')->insert([
            [
                'nama' => 'Kemeja Pria Koko Panjang Coklat 2288A',
                'slug' => 'kemeja-pria-koko-panjang',
                'kategori' => 'Pakaian Pria',
                'harga' => '169000',
                'gambar' => 'baju.jpg',
                'deskripsi' => 'Material: Katun
                Size pada Model:
                Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran L
                Garment care:
                1. Cuci dengan air suhu dibawah 40 derajat celcius
                2. Cuci dengan warna yang senada
                3. Jangan menggunakan pemutih
                4. Setrika dengan suhu sedang
                5. Cuci dengan membalikan luar-dalam pakaian.
                ',
                'stok' => 100,
                'ukruan' => 'L',
                'warna' => 'Coklat',
            ],
        ]);
    }
}
