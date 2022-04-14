<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'nama' => 'Baju Koko',
                'slug' => 'baju-koko',
            ],
            [
                'nama' => 'Celana',
                'slug' => 'celana',
            ],
            [
                'nama' => 'Tunik',
                'slug' => 'tunik',
            ],
            [
                'nama' => 'Hijab',
                'slug' => 'hijab',
            ],

        ]);
    }
}
