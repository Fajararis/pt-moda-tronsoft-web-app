<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;
class TableProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed produk data
        Produk::create([
            'nama' => 'Produk 1',
            'harga' => 10000,
            'deskripsi' => 'Deskripsi Produk 1',
            'foto' => 'https://www.femina.co.id/images/images/WEB%20-%20irene-kredenets-DDqxX0-7vKE-unsplash.jpg',
            'id_kategori' => 1,
        ]);

        Produk::create([
            'nama' => 'Produk 2',
            'harga' => 15000,
            'deskripsi' => 'Deskripsi Produk 2',
            'foto' => 'https://www.femina.co.id/images/images/WEB%20-%20irene-kredenets-DDqxX0-7vKE-unsplash.jpg',
            'id_kategori' => 2,
        ]);

    }
}
