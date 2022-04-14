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
                'kategori' => 'Baju koko',
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
                'kategori' => 'Celana Chino',
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
            [
                'nama' => 'DAUKY Atasan Wanita M Tunik Basic',
                'slug' => 'DAUKY-Atasan-Wanita',
                'kategori' => 'Tunik',
                'harga' => 159000,
                'gambar' => 'img/product/DAUKYTunikBasic.jpg',
                'deskripsi' => 'M Tunik Basic mendukung aktivitas perempuan yang aktif. Dirancang menggunakan bahan katun paris yang nyaman digunakan untuk kegiatan di dalam maupun di luar ruangan. Memiliki berbagai fitur seperti wudhu friendly dan busui friendly ',
                'stok' => 199,
                'ukuran' => 'M',
                'warna' => 'Grey',
            ],
            [
                'nama' => 'TUNIK DZUVIA',
                'slug' => 'TUNIK-DZUVIA',
                'kategori' => 'Tunik',
                'harga' => 45000,
                'gambar' => 'img/product/TUNIK-DZUVIA.jpg',
                'deskripsi' => '- Bahan yang di gunakan sangat nyaman dan enak saat di pakai.
                - Tidak membuat gerah / panas.
                - Model mengikuti perkembangan trend terbaru, cocok untuk anda yang suka fashion.
                -  Bahan : moscrepe
                Ukuran : fit to L besar ',
                'stok' => 150,
                'ukuran' => 'L',
                'warna' => 'Cream',
            ],
            [
                'nama' => 'Clemira-Bergo-Sport',
                'slug' => 'Clemira-Bergo-Sport',
                'kategori' => 'Hijab',
                'harga' => 15000,
                'gambar' => 'img/product/Clemira-Bergo-Sport.jpg',
                'deskripsi' => 'clemira bergo sport
                - nyaman digunakan
                - bahan yang digunakan bagus
                material : jersey',
                'stok' => 120,
                'ukuran' => 'M',
                'warna' => 'White',
            ],
            [
                'nama' => 'DGM Fashion Koko Kurta Pakistan Polos',
                'slug' => 'DGM-Fashion-Koko',
                'kategori' => 'Baju koko',
                'harga' => 135000,
                'gambar' => 'img/product/DGM-Fashion-Koko.jpg',
                'deskripsi' => 'Merk : JUST 

                Jahitan : Kwalitas Garment.
                
                Gambar : 100% Realpict
                
                Detail Produk :
                -	Bahan Cotton Premium.
                -	Kualitas Terbaik.
                -	Bahan : Nyaman dan Lembut.
                ',
                'stok' => 100,
                'ukuran' => 'XL',
                'warna' => 'Biru',
            ],
            [
                'nama' => 'House of Smith Long Cargo Pants',
                'slug' => 'House-of-Smith',
                'kategori' => 'Celana Cargo',
                'harga' => 160000,
                'gambar' => 'img/product/House-of-Smith.jpg',
                'deskripsi' => 'Warna yang terlihat pada gambar mungkin tidak 100% sama dengan produk yang
                sebenarnya, disebabkan faktor cahaya pada pengambilan gambar, atau kondisi
                gadget yang digunakan untuk melihat gambar.
                ',
                'stok' => 90,
                'ukuran' => 'L',
                'warna' => 'Grey',
            ],
        ]);
    }
}
