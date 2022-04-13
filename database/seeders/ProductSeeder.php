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
                'nama' => 'Baju',
                'slug' => 'baju',
                'kategori' => 'Baju',
                'harga' => '10000',
                'gambar' => 'baju.jpg',
                'deskripsi' => 'baju',
                'stok' => 10,
                'ukruan' => 'xl',
                'warna' => 'merah',
            ],
        ]);
    }
}
