<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('layanan')->truncate();

        DB::table('layanan')->insert([
            [
                'layanan_code' => 'REH',
                'nama_layanan' => 'Rehabilitasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'layanan_code' => 'PNG',
                'nama_layanan' => 'Pengaduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'layanan_code' => 'SOS',
                'nama_layanan' => 'Sosialisasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'layanan_code' => 'TES',
                'nama_layanan' => 'Tes Urin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
