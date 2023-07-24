<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataLokasi extends Seeder
{
    public function run()
    {
        $data = [
            [
                'alamat' => 'Jl. Lowanu No.47, Sorosutan, Umbulharjo, Yogyakarta',
                'kota' => 'Yogyakarta',
            ],
            [
                'alamat' => 'Jl. Ringroad Barat, Dowangan, Banyuraden, Gamping, Sleman, Yogyakarta',
                'kota' => 'Sleman, Yogyakarta',
            ],
        ];

        $this->db->table('lokasi')->insertBatch($data);
    }
}
