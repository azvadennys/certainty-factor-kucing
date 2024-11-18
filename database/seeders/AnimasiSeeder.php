<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animasi = [
            [
                'nama' => 'Dermatofitosis',
                'video_animasi' => 'images/animasi/Dermatofitosis.mp4',
                'id_penyakit' => ['P001'],
                'narator' => ''
            ],
            [
                'nama' => 'Aspergillosis',
                'video_animasi' => 'images/animasi/Aspergillosis.mp4',
                'id_penyakit' => ['P002'],
                'narator' => ''
            ],
            [
                'nama' => 'Phaeohyphomycosis',
                'video_animasi' => 'images/animasi/Phaeohyphomycosis.mp4',
                'id_penyakit' => ['P003'],
                'narator' => ''
            ],
            [
                'nama' => 'Candidiasis',
                'video_animasi' => 'images/animasi/Candidiasis.mp4',
                'id_penyakit' => ['P004'],
                'narator' => ''
            ],
            [
                'nama' => 'Blastomikosis',
                'video_animasi' => 'images/animasi/Blastomikosis.mp4',
                'id_penyakit' => ['P005'],
                'narator' => ''
            ],

            [
                'nama' => 'Sporotrikosis',
                'video_animasi' => 'images/animasi/Sporotrikosis.mp4',
                'id_penyakit' => ['P006'],
                'narator' => ''
            ],
            [
                'nama' => 'Kriptokokosis',
                'video_animasi' => 'images/animasi/Kriptokokosis.mp4',
                'id_penyakit' => ['P007'],
                'narator' => ''
            ],
            [
                'nama' => 'Histoplasmosis',
                'video_animasi' => 'images/animasi/Histoplasmosis.mp4',
                'id_penyakit' => ['P008'],
                'narator' => ''
            ],
            [
                'nama' => 'Rhinosporidiosis',
                'video_animasi' => 'images/animasi/Rhinosporidiosis.mp4',
                'id_penyakit' => ['P009'],
                'narator' => ''
            ],
            [
                'nama' => 'Mycetoma',
                'video_animasi' => 'images/animasi/Mycetoma.mp4',
                'id_penyakit' => ['P010'],
                'narator' => ''
            ],
            [
                'nama' => 'Coccidioidomikosis',
                'video_animasi' => 'images/animasi/Coccidioidomikosis.mp4',
                'id_penyakit' => ['P011'],
                'narator' => ''
            ],
            [
                'nama' => 'Malassezia Dermatitis',
                'video_animasi' => 'images/animasi/Malassezia Dermatitis.mp4',
                'id_penyakit' => ['P012'],
                'narator' => ''
            ],
            [
                'nama' => 'Onychomycosis',
                'video_animasi' => 'images/animasi/Onychomycosis.mp4',
                'id_penyakit' => ['P013'],
                'narator' => ''
            ],

        ];

        // Encode id_penyakit menjadi JSON sebelum menyimpan ke database
        foreach ($animasi as $index => $item) {
            $animasi[$index]['id_penyakit'] = json_encode($item['id_penyakit']);
        }

        // Simpan data animasi ke dalam tabel
        DB::table('animasi')->insert($animasi);
    }
}
