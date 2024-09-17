<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        // 'nama' => 'Admin',
        // 'email' => 'a@admin.com',
        // 'password' => bcrypt('123'),
       // ]);
   
    {
    
        DB::table('kategori')->insertOrIgnore([
            ['id' => 1,
             'nama' => 'Makanan'
            ],
            ['id' => 2,
             'nama' => 'Minuman'
            ],
            ['id' => 3,
             'nama' => 'Pakaian'
            ],
        ]);

        DB::table('barang')->insertOrIgnore([
            [
                'id' => 1,
                'kode_barang' => '0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 2,
                'kode_barang' => '0002',
                'nama_barang' => 'Nike',
                'id_kategori' => 3,
                'harga' => '50000',
                'jumlah' => 2
            ],
            [
                'id' => 3,
                'kode_barang' => '0003',
                'nama_barang' => 'Siomay',
                'id_kategori' => 1,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 4,
                'kode_barang' => '0004',
                'nama_barang' => 'Sprite',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 5,
                'kode_barang' => '0005',
                'nama_barang' => 'Pangsit',
                'id_kategori' => 1,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 6,
                'kode_barang' => '0006',
                'nama_barang' => 'Ais krim',
                'id_kategori' => 1,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 7,
                'kode_barang' => '0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 8,
                'kode_barang' => '0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 9,
                'kode_barang' => '0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 10,
                'kode_barang' => '0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 11,
                'kode_barang' => '0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 2,
                'harga' => '2500',
                'jumlah' => 50
            ],
            
        ]);
    }
}
}