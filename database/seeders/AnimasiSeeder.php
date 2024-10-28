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
                'nama' => 'Kulit Berjerawat 1',
                'video_animasi' => 'images/animasi/kulit berjerawat1.mp4',
                'id_serum' => ['P008', 'P012', 'P014', 'P017', 'P019'],
                'narator' => 'Untuk kulit berjerawat, gunakan gerakan menepuk-nepuk yang sangat ringan di area yang berjerawat. Hindari menggosok area yang berjerawat karena dapat memperparah peradangan. Lakukan gerakan menepuk nepuk pada seluruh wajah hingga serum terasa merata dan meresap pada permukaan kulit.'
            ],
            [
                'nama' => 'Kulit Berjerawat 2', 'video_animasi' => 'images/animasi/kulit berjerawat2.MOV', 'id_serum' => ['P008', 'P012', 'P014', 'P017', 'P019'],
                'narator' => 'Untuk kulit berjerawat, gunakan gerakan menepuk-nepuk yang sangat ringan di area yang berjerawat. Hindari menggosok area yang berjerawat karena dapat memperparah peradangan. Lakukan gerakan menepuk nepuk pada seluruh wajah hingga serum terasa merata dan meresap pada permukaan kulit.'
            ],
            [
                'nama' => 'Kulit Berminyak 1', 'video_animasi' => 'images/animasi/kulit berminyak1.mp4', 'id_serum' => ['P015', 'P017', 'P022'],
                'narator' => 'Untuk kulit berminyak, gunakan gerakan menepuk-nepuk yang ringan dan cepat saat mengoleskan serum. Hal ini membantu membuka pori-pori dan memungkinkan serum untuk meresap lebih dalam. Lakukan gerakan menepuk nepuk lembut pada area dahi dan dagu hingga serum terasa meresap pada kulit wajah.'
            ],
            [
                'nama' => 'Kulit Berminyak 2', 'video_animasi' => 'images/animasi/kulit berminyak2.MOV', 'id_serum' => ['P015', 'P017', 'P022'],
                'narator' => 'Untuk kulit berminyak, gunakan gerakan menepuk-nepuk yang ringan dan cepat saat mengoleskan serum. Hal ini membantu membuka pori-pori dan memungkinkan serum untuk meresap lebih dalam. Lakukan gerakan menepuk nepuk lembut pada area dahi dan dagu hingga serum terasa meresap pada kulit wajah.'
            ],
            [
                'nama' => 'Kulit Kering 1', 'video_animasi' => 'images/animasi/kulit kering1.mp4', 'id_serum' => ['P021'],
                'narator' => 'Untuk kulit kering, gunakan gerakan memutar dengan lambat dan tekan saat mengoleskan serum. Hal ini membantu meningkatkan aliran darah dan penyerapan serum ke dalam kulit kering. Lakukan gerakan memutar perlahan pada area dahi dan dagu hingga serum terasa merata pada permukaan kulit wajah. Kemudian lakukan gerakan menepuk nepuk lembut dengan perlahan pada wajah fokuskan pada area pipi. Lakukan hingga serum terasa meresap pada kulit wajah.'
            ],

            [
                'nama' => 'Kulit Kering 2', 'video_animasi' => 'images/animasi/kulit kering2.MOV', 'id_serum' => ['P021'],
                'narator' => 'Untuk kulit kering, gunakan gerakan memutar dengan lambat dan tekan saat mengoleskan serum. Hal ini membantu meningkatkan aliran darah dan penyerapan serum ke dalam kulit kering. Lakukan gerakan memutar perlahan pada area dahi dan dagu hingga serum terasa merata pada permukaan kulit wajah. Kemudian lakukan gerakan menepuk nepuk lembut dengan perlahan pada wajah fokuskan pada area pipi. Lakukan hingga serum terasa meresap pada kulit wajah.'
            ],
            [
                'nama' => 'Kulit Normal 1', 'video_animasi' => 'images/animasi/kulit normal1.mp4', 'id_serum' => ['P001', 'P003', 'P005', 'P009', 'P010', 'P011'],
                'narator' => 'Untuk kulit normal, gunakan gerakan memutar yang lembut saat mengoleskan serum. Hal ini membantu meningkatkan aliran darah dan penyerapan serum. Lanjutkan gerakan memutar pada area dahi dan dagu hingga serum terasa merata pada permukaan kulit wajah. Kemudian lakukan gerakan menepuk nepuk pada wajah fokuskan pada area pipi. Lakukan hingga serum terasa meresap pada kulit wajah.'
            ],
            [
                'nama' => 'Kulit Normal 2', 'video_animasi' => 'images/animasi/kulit normal2.MOV', 'id_serum' => ['P001', 'P003', 'P005', 'P009', 'P010', 'P011'],
                'narator' => 'Untuk kulit normal, gunakan gerakan memutar yang lembut saat mengoleskan serum. Hal ini membantu meningkatkan aliran darah dan penyerapan serum. Lanjutkan gerakan memutar pada area dahi dan dagu hingga serum terasa merata pada permukaan kulit wajah. Kemudian lakukan gerakan menepuk nepuk pada wajah fokuskan pada area pipi. Lakukan hingga serum terasa meresap pada kulit wajah.'
            ],
            [
                'nama' => 'Kulit Sensitif 1', 'video_animasi' => 'images/animasi/kulit sensitif1.mp4', 'id_serum' => ['P002', 'P006', 'P007', 'P014', 'P016', 'P018', 'P020', 'P023'],
                'narator' => 'Untuk kulit sensitif, gunakan gerakan menekan-nekan yang sangat lembut dan beri jeda pada setiap gerakan saat mengoleskan serum. Hal ini membantu meminimalkan iritasi pada kulit sensitif. Lakukan gerakan menekan nekan dengan perlahan dan berjeda pada dahi dan dagu hingga serum terasa merata dan meresap pada kulit wajah.'
            ],

            [
                'nama' => 'Kulit Sensitif 2', 'video_animasi' => 'images/animasi/kulit sensitif2.MOV', 'id_serum' => ['P002', 'P006', 'P007', 'P014', 'P016', 'P018', 'P020', 'P023'],
                'narator' => 'Untuk kulit sensitif, gunakan gerakan menekan-nekan yang sangat lembut dan beri jeda pada setiap gerakan saat mengoleskan serum. Hal ini membantu meminimalkan iritasi pada kulit sensitif. Lakukan gerakan menekan nekan dengan perlahan dan berjeda pada dahi dan dagu hingga serum terasa merata dan meresap pada kulit wajah.'
            ],

        ];

        // Encode id_serum menjadi JSON sebelum menyimpan ke database
        foreach ($animasi as $index => $item) {
            $animasi[$index]['id_serum'] = json_encode($item['id_serum']);
        }

        // Simpan data animasi ke dalam tabel
        DB::table('animasi')->insert($animasi);
    }
}
