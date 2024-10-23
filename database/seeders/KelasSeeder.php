<?php

namespace App\Database\Seeds;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'A',
            'B',
            'C',
            'D',
        ];

        foreach ($data as $kelas){
            Kelas::create([
                'nama_kelas' => $kelas,
            ]);
        }
    }
}
