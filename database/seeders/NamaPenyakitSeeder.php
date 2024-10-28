<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyakit = [
            [
                'kode_penyakit' => 'P001',
                'nama_penyakit' => 'Dermatofitosis',
                'deskripsi' => 'Dermatofitosis adalah penyakit kulit yang disebabkan oleh infeksi jamur dermatofita, khususnya Microsporum Canis. Penyakit ini lebih umum terjadi pada kucing dibandingkan dengan anjing, dengan gejala utama berupa lesi kulit, kerontokan rambut, dan gatal. Penularan jamur ini dapat terjadi baik secara langsung dari hewan yang terinfeksi maupun melalui lingkungan yang tercemar, menjadikannya sebagai masalah zoonosis yang perlu ditangani dengan serius.',
                'foto_penyakit' => 'images/penyakit/P001.jpg',
            ],
            [
                'kode_penyakit' => 'P002',
                'nama_penyakit' => 'Aspergillosis',
                'deskripsi' => 'Aspergillosis merupakan infeksi saluran pernapasan yang disebabkan oleh jamur Aspergillus, khususnya Aspergillus Fumigatus. Jamur ini umumnya ditemukan di pupuk kandang dan humus, dan dapat menyebabkan gejala seperti batuk, sesak nafas, serta pneumonia. Penularan terjadi melalui inhalasi spora jamur yang tersebar di udara, terutama di lingkungan yang terkontaminasi.',
                'foto_penyakit' => 'images/penyakit/P002.jpg',
            ],
            [
                'kode_penyakit' => 'P003',
                'nama_penyakit' => 'Phaeohyphomycosis',
                'deskripsi' => 'Phaeohyphomycosis adalah penyakit yang disebabkan oleh jamur hitam yang memiliki dinding septa miselia gelap. Dalam dunia veteriner, infeksi ini sering kali terjadi pada kulit dan dapat bersifat subkutan atau sistemik. Gejala yang muncul biasanya berupa lesi kulit, dan infeksi sering kali merupakan kontaminasi sekunder akibat luka traumatis. Penularan dapat terjadi melalui kontak langsung dengan lingkungan yang tercemar.',
                'foto_penyakit' => 'images/penyakit/P003.jpg',
            ],
            [
                'kode_penyakit' => 'P004',
                'nama_penyakit' => 'Candidiasis',
                'deskripsi' => 'Candidiasis adalah infeksi yang disebabkan oleh jamur Candida, terutama Candida Albicans. Infeksi ini dapat terjadi di berbagai area tubuh, seperti kelamin, mulut, kulit, dan darah. Gejala umum meliputi infeksi di rongga mulut, kulit, dan area genital, dengan penyebab utama adalah pertumbuhan jamur yang berlebihan di area lembab. Penularan sering terjadi melalui kontak langsung dengan lingkungan yang terkontaminasi.',
                'foto_penyakit' => 'images/penyakit/P004.jpg',
            ],
            [
                'kode_penyakit' => 'P005',
                'nama_penyakit' => 'Blastomikosis',
                'deskripsi' => 'Blastomikosis adalah infeksi sistemik yang disebabkan oleh Blastomyces Dermatitidis. Penyakit ini sering dimulai di paru-paru dan dapat menyebar ke organ lain, termasuk kulit dan tulang, dengan gejala seperti lesi granulomatosa dan demam. Penularan terjadi melalui inhalasi atau penelanan spora jamur yang biasanya ditemukan di tanah lembab.',
                'foto_penyakit' => 'images/penyakit/P005.jpg',
            ],
            [
                'kode_penyakit' => 'P006',
                'nama_penyakit' => 'Sporotrikosis',
                'deskripsi' => 'Sporotrikosis adalah infeksi kronik yang disebabkan oleh Sporothrix Schenckii. Penyakit ini dapat muncul dalam dua bentuk, yaitu tipe kulit primer dan sistemik, yang disebabkan oleh inokulasi jamur pada kulit yang mengalami trauma. Gejala dapat bervariasi, dengan lesi yang muncul di tempat inokulasi dan reaksi inflamasi pada saluran limfatik. Penularan terjadi melalui luka yang terkontaminasi.',
                'foto_penyakit' => 'images/penyakit/P006.jpg',
            ],
            [
                'kode_penyakit' => 'P007',
                'nama_penyakit' => 'Kriptokokosis',
                'deskripsi' => 'Kriptokokosis disebabkan oleh infeksi jamur Cryptococcus Neoformans, yang umumnya ditemukan di kotoran burung. Kucing dengan sistem imun yang lemah, seperti yang terinfeksi FIV atau FeLV, lebih rentan terhadap infeksi ini. Gejala yang muncul bervariasi tergantung lokasi infeksi, termasuk batuk, lesi kulit, dan penurunan nafsu makan. Kontaminasi dapat terjadi melalui kontak dengan limbah terkontaminasi.',
                'foto_penyakit' => 'images/penyakit/P007.jpg',
            ],
            [
                'kode_penyakit' => 'P008',
                'nama_penyakit' => 'Histoplasmosis',
                'deskripsi' => 'Histoplasmosis merupakan infeksi jamur invasif yang disebabkan oleh Histoplasma Capsulatum. Setelah terhirup, spora jamur dapat menyebabkan infeksi di paru-paru dan menyebar ke organ lain melalui darah atau sistem limfatik. Gejala yang muncul biasanya tidak spesifik, termasuk anoreksia, penurunan berat badan, dan kesulitan bernapas, sehingga diagnosis yang tepat sangat penting.',
                'foto_penyakit' => 'images/penyakit/P008.jpg',
            ],
            [
                'kode_penyakit' => 'P009',
                'nama_penyakit' => 'Rhinosporidiosis',
                'deskripsi' => 'Rhinosporidiosis adalah penyakit yang disebabkan oleh jamur parasit Rhinosporidium Seeberi. Meskipun lebih umum terjadi pada hewan lain, kasus pada kucing jarang terjadi. Gejalanya meliputi pembengkakan dan peradangan di hidung serta kesulitan bernapas. Pengobatan umumnya melibatkan pembedahan untuk mengangkat jaringan yang terinfeksi.',
                'foto_penyakit' => 'images/penyakit/P009.jpg',
            ],
            [
                'kode_penyakit' => 'P010',
                'nama_penyakit' => 'Mycetomas',
                'deskripsi' => 'Mycetomas adalah infeksi kronis yang mempengaruhi kulit, jaringan subkutan, dan kadang-kadang tulang. Penyakit ini ditandai oleh pembentukan abses yang berisi nanah dan serpihan jaringan. Penularan terjadi melalui kontak langsung dengan spora jamur di lingkungan, terutama tanah terkontaminasi, dan kucing dengan sistem imun lemah lebih rentan terhadap infeksi ini.',
                'foto_penyakit' => 'images/penyakit/P010.jpg',
            ],
            [
                'kode_penyakit' => 'P011',
                'nama_penyakit' => 'Coccidioidomycosis',
                'deskripsi' => 'Coccidioidomycosis adalah infeksi jamur yang disebabkan oleh Coccidioides Immitis atau Coccidioides Posadasii. Penyakit ini sering dikenal sebagai "demam gurun" dan dapat terjadi pada kucing yang terpapar spora melalui inhalasi. Gejala dapat bervariasi, mulai dari demam dan batuk hingga pneumonia yang lebih serius, tergantung pada tingkat keparahan infeksi.',
                'foto_penyakit' => 'images/penyakit/P011.jpg',
            ],
            [
                'kode_penyakit' => 'P012',
                'nama_penyakit' => 'Malassezia dermatitis',
                'deskripsi' => 'Malassezia dermatitis adalah infeksi kulit yang disebabkan oleh pertumbuhan berlebihan jamur Malassezia, yang merupakan bagian dari flora normal kulit. Ketika jamur ini tumbuh secara berlebihan, dapat menyebabkan reaksi inflamasi yang menghasilkan gejala seperti gatal, kemerahan, dan ketombe. Area yang paling sering terpengaruh adalah telinga, lipatan kulit, dan bagian tubuh dengan kulit yang lebih tebal.',
                'foto_penyakit' => 'images/penyakit/P012.jpg',
            ],
            [
                'kode_penyakit' => 'P013',
                'nama_penyakit' => 'Onychomycosis',
                'deskripsi' => 'Onychomycosis merujuk pada infeksi jamur pada kuku, yang umumnya disebabkan oleh dermatofit seperti Trichophyton. Gejala dapat mencakup kuku yang rapuh, menguning, dan iritasi di sekitar kuku yang terinfeksi. Infeksi ini dapat menyebar dari satu kuku ke kuku lainnya, sehingga memerlukan penanganan yang tepat untuk mencegah penyebaran lebih lanjut.',
                'foto_penyakit' => 'images/penyakit/P013.jpg',
            ],

        ];

        DB::table('penyakit')->insert($penyakit);
    }
}
