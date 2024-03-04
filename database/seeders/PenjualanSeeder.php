<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 2,
                'pembeli' => 'Asep',
                'penjualan_kode' => 'a1',
                'penjualan_tanggal' => '2024-02-29 08:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Andi',
                'penjualan_kode' => 'a2',
                'penjualan_tanggal' => '2024-02-29 08:01:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 2,
                'pembeli' => 'Dewi',
                'penjualan_kode' => 'a3',
                'penjualan_tanggal' => '2024-02-29 08:03:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Citra',
                'penjualan_kode' => 'a4',
                'penjualan_tanggal' => '2024-02-29 08:04:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Eka',
                'penjualan_kode' => 'a5',
                'penjualan_tanggal' => '2024-02-29 08:05:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Fitri',
                'penjualan_kode' => 'a6',
                'penjualan_tanggal' => '2024-02-29 08:08:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 2,
                'pembeli' => 'Galih',
                'penjualan_kode' => 'a7',
                'penjualan_tanggal' => '2024-02-29 08:10:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Hadi',
                'penjualan_kode' => 'a8',
                'penjualan_tanggal' => '2024-02-29 08:12:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 2,
                'pembeli' => 'Indah',
                'penjualan_kode' => 'a9',
                'penjualan_tanggal' => '2024-02-29 08:13:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 2,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'a10',
                'penjualan_tanggal' => '2024-02-29 08:14:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
