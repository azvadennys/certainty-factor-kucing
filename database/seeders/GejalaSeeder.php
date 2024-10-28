<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejala = [
            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Tidak nafsu makan',
                'deskripsi_gejala' => 'Kucing menunjukkan penurunan minat terhadap makanan, seringkali disertai dengan perilaku lesu. Hal ini bisa menjadi tanda bahwa kucing mengalami ketidaknyamanan atau penyakit yang lebih serius.',
                'foto_gejala' => 'images/gejalas/G01.jpg'
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Kelihatan mengantuk',
                'deskripsi_gejala' => 'Kucing tampak kurang aktif dan lebih banyak berbaring atau tidur. Keadaan ini dapat menunjukkan bahwa kucing tidak merasa baik atau sedang berjuang melawan infeksi.',
                'foto_gejala' => 'images/gejalas/G02.jpg'
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Mulut terbuka karena sukar bernafas',
                'deskripsi_gejala' => 'Kucing mungkin terlihat kesulitan bernapas, dengan mulut terbuka lebar dan pernapasan yang cepat atau tidak teratur. Ini bisa mengindikasikan masalah pernapasan yang serius akibat infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G03.jpg'
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Bentol-bentol kecil warna merah',
                'deskripsi_gejala' => 'Munculnya ruam berwarna merah kecil pada kulit kucing yang mungkin terasa gatal. Ini dapat menunjukkan reaksi alergi atau infeksi jamur pada kulit.',
                'foto_gejala' => 'images/gejalas/G04.jpg'
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Bulu yang terinfeksi mengalami kerontokan',
                'deskripsi_gejala' => 'Terjadi kerontokan rambut di area tertentu, sering kali disertai dengan kemerahan atau iritasi pada kulit, menandakan adanya infeksi yang mempengaruhi folikel rambut.',
                'foto_gejala' => 'images/gejalas/G05.jpg'
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Kulit terlihat kemerahan bentuk lingkaran dan gatal-gatal',
                'deskripsi_gejala' => 'Adanya bercak kemerahan berbentuk lingkaran pada kulit kucing yang disertai rasa gatal, menunjukkan adanya infeksi jamur seperti dermatofitosis.',
                'foto_gejala' => 'images/gejalas/G06.jpg'
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Gatal-gatal',
                'deskripsi_gejala' => 'Kucing menunjukkan perilaku menggaruk atau menggigit area kulit yang terinfeksi, yang dapat menyebabkan kerusakan lebih lanjut pada kulit.',
                'foto_gejala' => 'images/gejalas/G07.jpg'
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Terjadi kerusakan kulit',
                'deskripsi_gejala' => 'Penampakan kulit yang rusak atau terkelupas akibat goresan atau infeksi, sering kali terlihat bersisik atau berdarah.',
                'foto_gejala' => 'images/gejalas/G08.jpg'
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Timbul keropeng pada kulit',
                'deskripsi_gejala' => 'Keropeng atau kerak dapat terbentuk di area yang terinfeksi, sering kali sebagai respons terhadap luka yang teriritasi atau terinfeksi.',
                'foto_gejala' => 'images/gejalas/G09.jpg'
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Terlihat jelas lesi dengan bentukan bulat simetris',
                'deskripsi_gejala' => 'Lesi berbentuk bulat dan simetris muncul pada kulit, sering kali menjadi ciri khas infeksi jamur seperti dermatofitosis.',
                'foto_gejala' => 'images/gejalas/G10.jpg'
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Kemerahan pada area yang terkena',
                'deskripsi_gejala' => 'Area kulit yang terinfeksi tampak merah dan meradang, menandakan adanya peradangan yang diakibatkan oleh infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G11.jpg'
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Kehilangan berat badan',
                'deskripsi_gejala' => 'Kucing menunjukkan penurunan berat badan yang signifikan, yang bisa disebabkan oleh nafsu makan yang berkurang atau kondisi kesehatan yang memburuk.',
                'foto_gejala' => 'images/gejalas/G12.jpg'
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Sinusitis',
                'deskripsi_gejala' => 'Peradangan pada sinus kucing, yang dapat menyebabkan gejala seperti hidung tersumbat dan nyeri wajah.',
                'foto_gejala' => 'images/gejalas/G13.jpg'
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Infeksi rongga hidung',
                'deskripsi_gejala' => 'Terjadi peradangan dan infeksi di rongga hidung, menyebabkan kucing mengalami kesulitan bernapas dan keluarnya cairan dari hidung.',
                'foto_gejala' => 'images/gejalas/G14.jpg'
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Mucopurulent serous (bunyi sengau)',
                'deskripsi_gejala' => 'Kucing menghasilkan suara sengau saat bernapas, sering disertai dengan keluarnya cairan kental dari hidung.',
                'foto_gejala' => 'images/gejalas/G15.jpg'
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Hemorrhage (pendarahan tidak normal)',
                'deskripsi_gejala' => 'Terjadi pendarahan dari area yang terinfeksi, yang dapat mengindikasikan infeksi yang lebih serius atau kerusakan jaringan.',
                'foto_gejala' => 'images/gejalas/G16.jpg'
            ],
            [
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Luka pada kulit yang berupa papula atau bongkol-bongkol kecil',
                'deskripsi_gejala' => 'Munculnya papula atau benjolan kecil pada kulit yang dapat teraba dan terlihat merah, yang sering disebabkan oleh infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G17.jpg'
            ],
            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Edema subkutan (pembengkakan yang teraba lunak di bawah kulit)',
                'deskripsi_gejala' => 'Terjadi pembengkakan di bawah kulit yang dapat diraba, menunjukkan adanya peradangan atau infeksi yang lebih dalam.',
                'foto_gejala' => 'images/gejalas/G18.jpg'
            ],
            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Lesi ulseratif besar di beberapa bagian tubuh',
                'deskripsi_gejala' => 'Adanya lesi yang dalam dan menyakitkan di berbagai area tubuh kucing, yang menunjukkan infeksi yang serius dan mungkin sudah menyebar.',
                'foto_gejala' => 'images/gejalas/G19.jpg'
            ],
            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Batuk, nafas cepat, bersin dan keluar leleran dari hidung',
                'deskripsi_gejala' => 'Gejala pernapasan yang mencakup batuk, napas yang cepat, bersin, dan keluarnya cairan dari hidung, menunjukkan infeksi pernapasan.',
                'foto_gejala' => 'images/gejalas/G20.jpg'
            ],
            [
                'kode_gejala' => 'G21',
                'nama_gejala' => 'Gangguan pernapasan',
                'deskripsi_gejala' => 'Kucing mengalami kesulitan bernapas yang dapat disertai dengan suara napas yang abnormal, menandakan adanya infeksi saluran pernapasan.',
                'foto_gejala' => 'images/gejalas/G21.jpg'
            ],
            [
                'kode_gejala' => 'G22',
                'nama_gejala' => 'Anoreksia',
                'deskripsi_gejala' => 'Kucing tidak mau makan, yang bisa menjadi tanda adanya penyakit serius atau ketidaknyamanan yang signifikan.',
                'foto_gejala' => 'images/gejalas/G22.jpg'
            ],
            [
                'kode_gejala' => 'G23',
                'nama_gejala' => 'Leleran hidung dengan bau tidak sedap',
                'deskripsi_gejala' => 'Keluarnya cairan dari hidung yang berbau tidak sedap, sering kali menunjukkan infeksi serius di saluran pernapasan.',
                'foto_gejala' => 'images/gejalas/G23.jpg'
            ],
            [
                'kode_gejala' => 'G24',
                'nama_gejala' => 'Ketombe',
                'deskripsi_gejala' => 'Adanya serpihan kecil putih pada kulit kucing, menunjukkan masalah kulit yang bisa disebabkan oleh infeksi jamur atau kondisi dermatologis lainnya.',
                'foto_gejala' => 'images/gejalas/G24.jpg'
            ],
            [
                'kode_gejala' => 'G25',
                'nama_gejala' => 'Bersin',
                'deskripsi_gejala' => 'Kucing bersin berulang kali, yang bisa menjadi reaksi terhadap iritasi pada saluran pernapasan akibat infeksi.',
                'foto_gejala' => 'images/gejalas/G25.jpg'
            ],
            [
                'kode_gejala' => 'G26',
                'nama_gejala' => 'Nodul limfatik yang bengkak',
                'deskripsi_gejala' => 'Pembengkakan pada kelenjar limfatik, yang menunjukkan adanya respons imun terhadap infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G26.jpg'
            ],
            [
                'kode_gejala' => 'G27',
                'nama_gejala' => 'Bercak kulit menjadi lebih gelap (hiperpigmentasi)',
                'deskripsi_gejala' => 'Area kulit yang terinfeksi mungkin mengalami perubahan warna menjadi lebih gelap, akibat peradangan kronis.',
                'foto_gejala' => 'images/gejalas/G27.jpg'
            ],
            [
                'kode_gejala' => 'G28',
                'nama_gejala' => 'Keluarnya cairan berbau busuk dari lesi',
                'deskripsi_gejala' => 'Lesi yang terinfeksi mungkin mengeluarkan nanah atau cairan berbau busuk, menunjukkan adanya infeksi yang parah.',
                'foto_gejala' => 'images/gejalas/G28.jpg'
            ],
            [
                'kode_gejala' => 'G29',
                'nama_gejala' => 'Kulit bersisik',
                'deskripsi_gejala' => 'Penampilan kulit yang kering dan bersisik, sering kali sebagai hasil dari infeksi jamur yang mempengaruhi lapisan kulit.',
                'foto_gejala' => 'images/gejalas/G29.jpg'
            ],
            [
                'kode_gejala' => 'G30',
                'nama_gejala' => 'Alopecia (kebotakan)',
                'deskripsi_gejala' => 'Kehilangan rambut yang terjadi di area tertentu atau seluruh tubuh, sering kali disebabkan oleh infeksi jamur atau iritasi.',
                'foto_gejala' => 'images/gejalas/G30.jpg'
            ],
            [
                'kode_gejala' => 'G31',
                'nama_gejala' => 'Penebalan epidermis',
                'deskripsi_gejala' => 'Lapisan epidermis kulit yang menebal, biasanya sebagai respons terhadap peradangan atau iritasi kronis.',
                'foto_gejala' => 'images/gejalas/G31.jpg'
            ],
            [
                'kode_gejala' => 'G32',
                'nama_gejala' => 'Kulit meradang dan bengkak',
                'deskripsi_gejala' => 'Kucing menunjukkan area kulit yang bengkak dan meradang, sering kali menyakitkan dan dapat disertai kemerahan.',
                'foto_gejala' => 'images/gejalas/G32.jpg'
            ],
            [
                'kode_gejala' => 'G33',
                'nama_gejala' => 'Iritasi kulit',
                'deskripsi_gejala' => 'Adanya kemerahan, gatal, dan ketidaknyamanan pada kulit, menunjukkan reaksi terhadap infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G33.jpg'
            ],
            [
                'kode_gejala' => 'G34',
                'nama_gejala' => 'Keringatan',
                'deskripsi_gejala' => 'Kucing terlihat berkeringat atau mengalami peningkatan suhu tubuh akibat infeksi, meskipun kucing tidak berkeringat seperti manusia.',
                'foto_gejala' => 'images/gejalas/G34.jpg'
            ],
            [
                'kode_gejala' => 'G35',
                'nama_gejala' => 'Kuku menjadi rapuh dan mudah patah',
                'deskripsi_gejala' => 'Kuku kucing terlihat lemah dan mudah pecah, yang dapat disebabkan oleh infeksi jamur yang mempengaruhi pertumbuhan kuku.',
                'foto_gejala' => 'images/gejalas/G35.jpg'
            ],
            [
                'kode_gejala' => 'G36',
                'nama_gejala' => 'Kuku berubah warna, bisa menjadi kuning, coklat, atau hitam',
                'deskripsi_gejala' => 'Perubahan warna pada kuku yang mungkin menunjukkan adanya infeksi atau masalah kesehatan lainnya.',
                'foto_gejala' => 'images/gejalas/G36.jpg'
            ],
            [
                'kode_gejala' => 'G37',
                'nama_gejala' => 'Kuku menjadi lebih tebal atau tipis dari biasanya',
                'deskripsi_gejala' => 'Kuku kucing menunjukkan perubahan ketebalan, yang dapat menjadi tanda adanya infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G37.jpg'
            ],
            [
                'kode_gejala' => 'G38',
                'nama_gejala' => 'Kucing terlihat kesakitan saat berjalan',
                'deskripsi_gejala' => 'Kucing menunjukkan tanda-tanda kesakitan saat bergerak, yang bisa disebabkan oleh infeksi yang mempengaruhi kaki atau sendi.',
                'foto_gejala' => 'images/gejalas/G38.jpg'
            ],
            [
                'kode_gejala' => 'G39',
                'nama_gejala' => 'Kucing menjadi kurang aktif',
                'deskripsi_gejala' => 'Kucing tampak lesu dan kurang bersemangat untuk bermain atau bergerak, sering kali sebagai respons terhadap penyakit.',
                'foto_gejala' => 'images/gejalas/G39.jpg'
            ],
            [
                'kode_gejala' => 'G40',
                'nama_gejala' => 'Kucing sering menggigit atau menggaruk kakinya, terutama pada area yang terkena',
                'deskripsi_gejala' => 'Perilaku ini menunjukkan ketidaknyamanan pada kucing, biasanya akibat gatal atau iritasi yang disebabkan oleh infeksi jamur.',
                'foto_gejala' => 'images/gejalas/G40.jpg'
            ],
            [
                'kode_gejala' => 'G41',
                'nama_gejala' => 'Muncul retakan atau garis-garis pada permukaan kuku',
                'deskripsi_gejala' => 'Kuku kucing menunjukkan tanda-tanda kerusakan, seperti retakan atau garis, yang dapat mengindikasikan infeksi atau kelemahan struktural.',
                'foto_gejala' => 'images/gejalas/G41.jpg'
            ],
            [
                'kode_gejala' => 'G42',
                'nama_gejala' => 'Kuku berdarah',
                'deskripsi_gejala' => 'Kuku yang berdarah menunjukkan kemungkinan trauma atau infeksi yang parah, memerlukan perhatian medis segera.',
                'foto_gejala' => 'images/gejalas/G42.jpg'
            ],
            [
                'kode_gejala' => 'G43',
                'nama_gejala' => 'Hidung berair',
                'deskripsi_gejala' => 'Kucing mengalami keluarnya cairan dari hidung, yang dapat disebabkan oleh infeksi saluran pernapasan.',
                'foto_gejala' => 'images/gejalas/G43.jpg'
            ],
            [
                'kode_gejala' => 'G44',
                'nama_gejala' => 'Hidung tersumbat',
                'deskripsi_gejala' => 'Kucing kesulitan bernapas karena hidung yang tersumbat, sering kali disebabkan oleh infeksi atau iritasi.',
                'foto_gejala' => 'images/gejalas/G44.jpg'
            ],
            [
                'kode_gejala' => 'G45',
                'nama_gejala' => 'Pendarahan dari hidung',
                'deskripsi_gejala' => 'Kucing mengalami pendarahan dari hidung, yang bisa menjadi tanda masalah kesehatan yang serius.',
                'foto_gejala' => 'images/gejalas/G45.jpg'
            ],
            [
                'kode_gejala' => 'G46',
                'nama_gejala' => 'Papula / benjolan di bawah kulit',
                'deskripsi_gejala' => 'Munculnya benjolan kecil yang dapat diraba di bawah kulit, sering kali menunjukkan adanya reaksi alergi atau infeksi.',
                'foto_gejala' => 'images/gejalas/G46.jpg'
            ],
            [
                'kode_gejala' => 'G47',
                'nama_gejala' => 'Kemerahan dan bengkak pada mata',
                'deskripsi_gejala' => 'Adanya kemerahan dan pembengkakan di sekitar mata, yang bisa mengindikasikan infeksi atau iritasi.',
                'foto_gejala' => 'images/gejalas/G47.jpg'
            ],
            [
                'kode_gejala' => 'G48',
                'nama_gejala' => 'Keluarnya cairan dari mata',
                'deskripsi_gejala' => 'Keluarnya cairan dari mata kucing, yang sering kali berhubungan dengan infeksi konjungtivitis atau iritasi.',
                'foto_gejala' => 'images/gejalas/G48.jpg'
            ],
            [
                'kode_gejala' => 'G49',
                'nama_gejala' => 'Gatal pada telinga',
                'deskripsi_gejala' => 'Kucing menunjukkan perilaku menggaruk atau menggosok telinga, yang bisa disebabkan oleh infeksi atau parasit.',
                'foto_gejala' => 'images/gejalas/G49.jpg'
            ],
            [
                'kode_gejala' => 'G50',
                'nama_gejala' => 'Keluarnya cairan dari telinga',
                'deskripsi_gejala' => 'Keluarnya nanah atau cairan dari telinga, menunjukkan adanya infeksi telinga yang perlu diobati.',
                'foto_gejala' => 'images/gejalas/G50.jpg'
            ],
            [
                'kode_gejala' => 'G51',
                'nama_gejala' => 'Pembengkakan pada organ genital',
                'deskripsi_gejala' => 'Terjadi pembengkakan yang mencolok pada area genital, menandakan kemungkinan infeksi atau peradangan.',
                'foto_gejala' => 'images/gejalas/G51.jpg'
            ],
            [
                'kode_gejala' => 'G52',
                'nama_gejala' => 'Munculnya lubang atau fistula pada kulit',
                'deskripsi_gejala' => 'Pembentukan saluran abnormal di kulit yang dapat mengeluarkan nanah, menunjukkan infeksi serius yang memerlukan perawatan.',
                'foto_gejala' => 'images/gejalas/G52.jpg'
            ],
            [
                'kode_gejala' => 'G53',
                'nama_gejala' => 'Keluarnya nanah dari lubang atau fistula',
                'deskripsi_gejala' => 'Nanah yang keluar dari saluran abnormal menunjukkan infeksi yang parah dan memerlukan perhatian medis.',
                'foto_gejala' => 'images/gejalas/G53.jpg'
            ],
            [
                'kode_gejala' => 'G54',
                'nama_gejala' => 'Nyeri pada area yang terkena',
                'deskripsi_gejala' => 'Kucing menunjukkan tanda-tanda ketidaknyamanan atau nyeri pada bagian tubuh yang terinfeksi, membuatnya enggan bergerak.',
                'foto_gejala' => 'images/gejalas/G54.jpg'
            ],
            [
                'kode_gejala' => 'G55',
                'nama_gejala' => 'Kaki pincang',
                'deskripsi_gejala' => 'Kucing terlihat kesulitan berjalan atau tidak dapat menumpukan berat badan pada kaki tertentu, bisa disebabkan oleh nyeri atau cedera.',
                'foto_gejala' => 'images/gejalas/G55.jpg'
            ],
            [
                'kode_gejala' => 'G56',
                'nama_gejala' => 'Kehilangan penglihatan',
                'deskripsi_gejala' => 'Kucing mungkin mengalami penurunan atau kehilangan penglihatan, yang dapat disebabkan oleh infeksi pada mata.',
                'foto_gejala' => 'images/gejalas/G56.jpg'
            ],
            [
                'kode_gejala' => 'G57',
                'nama_gejala' => 'Lumpuh',
                'deskripsi_gejala' => 'Kucing menunjukkan kehilangan fungsi gerakan di bagian tubuh tertentu atau seluruhnya, sering kali akibat kerusakan saraf.',
                'foto_gejala' => 'images/gejalas/G57.jpg'
            ],
            [
                'kode_gejala' => 'G58',
                'nama_gejala' => 'Spot lesi makin multifokal dan ada infeksi sekunder dari bakteri',
                'deskripsi_gejala' => 'Munculnya beberapa lesi di berbagai tempat yang dapat terinfeksi sekunder oleh bakteri, menandakan komplikasi serius.',
                'foto_gejala' => 'images/gejalas/G58.jpg'
            ],
            [
                'kode_gejala' => 'G59',
                'nama_gejala' => 'Kemerahan di tengah lesi',
                'deskripsi_gejala' => 'Area tengah dari lesi menunjukkan kemerahan yang mencolok, yang menunjukkan adanya peradangan aktif.',
                'foto_gejala' => 'images/gejalas/G59.jpg'
            ],
            [
                'kode_gejala' => 'G60',
                'nama_gejala' => 'Kebotakan pada seluruh tubuh',
                'deskripsi_gejala' => 'Kehilangan rambut secara luas di seluruh tubuh, sering kali mengindikasikan kondisi kesehatan yang serius atau infeksi jamur yang luas.',
                'foto_gejala' => 'images/gejalas/G60.jpg'
            ],
        ];

        DB::table('gejala')->insert($gejala);
    }
}
