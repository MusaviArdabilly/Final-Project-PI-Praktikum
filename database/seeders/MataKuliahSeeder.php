<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mataKuliahs = [
            [
                'id' => 1,
                'nama' => 'Pemrograman Dasar'
            ],
            [
                'id' => 2,
                'nama' => 'Pemrograman Dasar'
            ],
            [
                'id' => 3,
                'nama' => 'Algoritma dan Struktur Data'
            ],
            [
                'id' => 4,
                'nama' => 'Sistem Basis Data'
            ],
            [
                'id' => 5,
                'nama' => 'Jaringan Komputer Dasar'
            ],
        ];

        foreach($mataKuliahs as $matakuliah){
            MataKuliah::create($matakuliah);
        }
    }
}
