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
                'harga' => 169000,
                'gambar' => 'img/product/kemejapriakoko.jpg',
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
                'ukuran' => 'L',
                'warna' => 'Coklat',
            ],
            [
                'nama' => 'Russ Chino Pants Suspect Black',
                'slug' => 'Russ-Chino-Pants',
                'kategori' => 'Celana Pria',
                'harga' => 149000,
                'gambar' => 'img/product/RussChinoPants.jpg',
                'deskripsi' => 'Celana chinos basic bergaya kasual 
                - Regular fit 
                - Kancing dan resleting depan 
                - 2 kantong depan dan belakang 
                - Material katun twill, ringan, stretch
                ',
                'stok' => 200,
                'ukuran' => 'L',
                'warna' => 'Hitam',
            ],
            [
                'nama' => 'HIJAB BELLA SQUARE',
                'slug' => 'HIJAB-BELLA-SQUARE',
                'kategori' => 'Hijab',
                'harga' => 10500,
                'gambar' => 'img/product/HIJAB-BELLA.jpg',
                'deskripsi' => 'Bahan POLLY CATTON = DOUBLE HYCON
                Uk.110 x 110 cm
                1 kg muat 16 pcs
                Hijab di Neci tepi 😍
                Hijab yang lagi hits banget , yang suka di pake teh bell 😍',
                'stok' => 99,
                'ukuran' => '110x110',
                'warna' => 'Navy',
            ],
        ]);
    }
}
