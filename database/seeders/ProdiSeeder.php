<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodis = [
            [
                'id' => 1,
                'nama' => 'Teknologi Informasi'
            ],
            [
                'id' => 2,
                'nama' => 'Sistem Informasi'
            ],
            [
                'id' => 3,
                'nama' => 'Pendidikan Teknologi Informasi'
            ],
            [
                'id' => 4,
                'nama' => 'Teknik Informatika'
            ],
            [
                'id' => 5,
                'nama' => 'Teknik Komputer'
            ],
        ];

        foreach($prodis as $prodi){
            Prodi::create($prodi);
        }
    }
}
