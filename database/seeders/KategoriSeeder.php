<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed kategori data
        Kategori::create([
            'nama_kategori' => 'Kategori 1',
            'status' => 'aktif',
        ]);

        Kategori::create([
            'nama_kategori' => 'Kategori 2',
            'status' => 'tidak aktif',
        ]);

    }
}
