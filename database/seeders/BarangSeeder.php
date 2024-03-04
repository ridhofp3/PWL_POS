<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 1,
                'barang_nama' => 'Indomie',
                'harga_beli' => 2800,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 2,
                'barang_nama' => 'Mie Sedap',
                'harga_beli' => 2800,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 3,
                'barang_nama' => 'Aqua',
                'harga_beli' => 2300,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 4,
                'barang_nama' => 'Le Minerale',
                'harga_beli' => 2300,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 5,
                'barang_nama' => 'Hot Wheels',
                'harga_beli' => 30000,
                'harga_jual' => 34000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 6,
                'barang_nama' => 'Uno Express',
                'harga_beli' => 22000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 7,
                'barang_nama' => 'Vitalong C',
                'harga_beli' => 45000,
                'harga_jual' => 48000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 8,
                'barang_nama' => 'Paramex',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 9,
                'barang_nama' => 'Tisu Wajah',
                'harga_beli' => 9500,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 10,
                'barang_nama' => 'Deterjen Cair',
                'harga_beli' => 14500,
                'harga_jual' => 15000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
