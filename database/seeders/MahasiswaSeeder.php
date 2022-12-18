<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TabelMahasiswa::create([
            'nama' => 'Rizky',
            'nrp' => '05111940000001',
            'email' => 'rizkygeming@gmail.com',
            'judul' => 'ARRIMA',
            'pembimbing1' => 'Johan',
            'pembimbing2' => 'Yanto',
            'penguji1' => 'Holil',
            'penguji2' => 'Lugowo',
            'ruangan' => 'SI101',
            'tanggal' => '2022-12-18',
            'waktu' => '09:00'
        ]);
        \App\Models\TabelMahasiswa::create([
            'nama' => 'Rehan',
            'nrp' => '05111940000002',
            'email' => 'rehan@gmail.com',
            'judul' => 'LSA',
            'pembimbing1' => 'Lukas',
            'pembimbing2' => 'Yanto',
            'penguji1' => 'Madara',
            'penguji2' => 'Lugowo',
            'ruangan' => 'SI102',
            'tanggal' => '2022-12-19',
            'waktu' => '09:00'
        ]);
    }
}
