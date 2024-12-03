<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['name' => 'Administrator', 'email' => 'admin@gmail.com', 'role' => 'admin', 'password' => Hash::make('123')],
            ['name' => 'Pengguna', 'email' => 'user@gmail.com', 'role' => 'user', 'password' => Hash::make('123')],
        ];
        DB::table('users')->insert($users);

        $dataRiwayat = [
            [
                'id' => 1,
                'id_users' => 2,
                'cfResults' => '{"G07":0.010000000000000002,"G08":0.12,"G10":0.5599999999999999,"G30":0.24,"G19":0.48,"G26":0.3,"G17":0.36,"G11":0.32000000000000006,"G40":0.06}',
                'penyakitResults' => '[{"kode_penyakit":"P006","nama_penyakit":"Sporotrikosis","persentase":0.902026432,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.2","cf_pengetahuan":0.3,"cf_hasil":0.06},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.6","cf_pengetahuan":0.5,"cf_hasil":0.3},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"0.8","cf_pengetahuan":0.8,"cf_hasil":0.6400000000000001},{"kode_gejala":"G11","nama_gejala":"Kemerahan pada area yang terkena","cf_user":"0.8","cf_pengetahuan":0.7,"cf_hasil":0.5599999999999999},{"kode_gejala":"G40","nama_gejala":"Kucing sering menggigit atau menggaruk kakinya, terutama pada area yang terkena","cf_user":"0.2","cf_pengetahuan":0.3,"cf_hasil":0.06}]},{"kode_penyakit":"P008","nama_penyakit":"Histoplasmosis","persentase":0.8331756544,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.2","cf_pengetahuan":0.05,"cf_hasil":0.010000000000000002},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.6","cf_pengetahuan":0.2,"cf_hasil":0.12},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"0.8","cf_pengetahuan":0.7,"cf_hasil":0.5599999999999999},{"kode_gejala":"G11","nama_gejala":"Kemerahan pada area yang terkena","cf_user":"0.8","cf_pengetahuan":0.4,"cf_hasil":0.32000000000000006},{"kode_gejala":"G17","nama_gejala":"Luka pada kulit yang berupa papula atau bongkol-bongkol kecil","cf_user":"0.6","cf_pengetahuan":0.6,"cf_hasil":0.36}]},{"kode_penyakit":"P001","nama_penyakit":"Dermatofitosis","persentase":0.8287872000000001,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.2","cf_pengetahuan":0.6,"cf_hasil":0.12},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.6","cf_pengetahuan":0.6,"cf_hasil":0.36},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"0.8","cf_pengetahuan":0.75,"cf_hasil":0.6000000000000001},{"kode_gejala":"G30","nama_gejala":"Alopecia (kebotakan)","cf_user":"0.6","cf_pengetahuan":0.4,"cf_hasil":0.24}]},{"kode_penyakit":"P003","nama_penyakit":"Phaeohyphomycosis","persentase":0.7200000000000001,"iterasi_cf":[{"kode_gejala":"G19","nama_gejala":"Lesi ulseratif besar di beberapa bagian tubuh","cf_user":"0.8","cf_pengetahuan":0.75,"cf_hasil":0.6000000000000001},{"kode_gejala":"G26","nama_gejala":"Nodul limfatik yang bengkak","cf_user":"0.6","cf_pengetahuan":0.5,"cf_hasil":0.3}]},{"kode_penyakit":"P005","nama_penyakit":"Blastomikosis","persentase":0.680512,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.2","cf_pengetahuan":0.2,"cf_hasil":0.04000000000000001},{"kode_gejala":"G17","nama_gejala":"Luka pada kulit yang berupa papula atau bongkol-bongkol kecil","cf_user":"0.6","cf_pengetahuan":0.6,"cf_hasil":0.36},{"kode_gejala":"G19","nama_gejala":"Lesi ulseratif besar di beberapa bagian tubuh","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48}]},{"kode_penyakit":"P004","nama_penyakit":"Candidiasis","persentase":0.05,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.2","cf_pengetahuan":0.25,"cf_hasil":0.05}]},{"kode_penyakit":"P002","nama_penyakit":"Aspergillosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P007","nama_penyakit":"Kriptokokosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P009","nama_penyakit":"Rhinosporidiosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P010","nama_penyakit":"Mycetomas","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P011","nama_penyakit":"Coccidioidomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P012","nama_penyakit":"Malassezia dermatitis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P013","nama_penyakit":"Onychomycosis","persentase":0,"iterasi_cf":[]}]',
                'created_at' => '2024-12-03 15:21:31',
                'updated_at' => '2024-12-03 15:21:31',
            ],
            [
                'id' => 2,
                'id_users' => 2,
                'cfResults' => '{"G05":0.26,"G06":0.9,"G07":0.04000000000000001,"G08":0.16000000000000003,"G09":0.1,"G61":0.48}',
                'penyakitResults' => '[{"kode_penyakit":"P001","nama_penyakit":"Dermatofitosis","persentase":0.98899472,"iterasi_cf":[{"kode_gejala":"G05","nama_gejala":"Bulu yang terinfeksi mengalami kerontokan","cf_user":"0.4","cf_pengetahuan":0.65,"cf_hasil":0.26},{"kode_gejala":"G06","nama_gejala":"Kulit terlihat kemerahan bentuk lingkaran dan gatal-gatal","cf_user":"1","cf_pengetahuan":0.9,"cf_hasil":0.9},{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48},{"kode_gejala":"G09","nama_gejala":"Timbul keropeng pada kulit","cf_user":"1","cf_pengetahuan":0.45,"cf_hasil":0.45}]},{"kode_penyakit":"P006","nama_penyakit":"Sporotrikosis","persentase":0.8176,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.3,"cf_hasil":0.24},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.0,"cf_hasil":0.0},{"kode_gejala":"G09","nama_gejala":"Timbul keropeng pada kulit","cf_user":"0.2","cf_pengetahuan":0.6,"cf_hasil":0.12},{"kode_gejala":"G61","nama_gejala":"Ada pembengkakan pada kelenjar getah bening","cf_user":"0.6","cf_pengetahuan":0.8,"cf_hasil":0.48}]},{"kode_penyakit":"P003","nama_penyakit":"Phaeohyphomycosis","persentase":0.27216000000000003,"iterasi_cf":[{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.1,"cf_hasil":0.08000000000000002},{"kode_gejala":"G09","nama_gejala":"Timbul keropeng pada kulit","cf_user":"0.2","cf_pengetahuan":0.7,"cf_hasil":0.14}]},{"kode_penyakit":"P008","nama_penyakit":"Histoplasmosis","persentase":0.21648000000000003,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.2","cf_pengetahuan":0.5,"cf_hasil":0.1},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.6","cf_pengetahuan":0.5,"cf_hasil":0.3}]},{"kode_penyakit":"P002","nama_penyakit":"Aspergillosis","persentase":0.09920000000000002,"iterasi_cf":[{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.2","cf_pengetahuan":0.2,"cf_hasil":0.04}]},{"kode_penyakit":"P004","nama_penyakit":"Candidiasis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P005","nama_penyakit":"Blastomikosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P007","nama_penyakit":"Kriptokokosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P009","nama_penyakit":"Rhinosporidiosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P010","nama_penyakit":"Mycetomas","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P011","nama_penyakit":"Coccidioidomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P012","nama_penyakit":"Malassezia dermatitis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P013","nama_penyakit":"Onychomycosis","persentase":0,"iterasi_cf":[]}]',
                'created_at' => '2024-12-03 15:22:31',
                'updated_at' => '2024-12-03 15:22:31',
            ],
            [
                'id' => 3,
                'id_users' => 2,
                'cfResults' => '{"G01":0.27999999999999997,"G02":0.24,"G08":0.16000000000000003,"G10":0.42,"G12":0.27999999999999997,"G03":0.85,"G22":0.7200000000000001,"G13":0.39,"G11":0.24,"G21":0.75}',
                'penyakitResults' => '[{"kode_penyakit":"P008","nama_penyakit":"Histoplasmosis","persentase":0.9792647680000001,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"1","cf_pengetahuan":0.8,"cf_hasil":0.8},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.2,"cf_hasil":0.16000000000000003},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"0.6","cf_pengetahuan":0.7,"cf_hasil":0.42},{"kode_gejala":"G11","nama_gejala":"Kemerahan pada area yang terkena","cf_user":"0.6","cf_pengetahuan":0.4,"cf_hasil":0.24},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.8","cf_pengetahuan":0.9,"cf_hasil":0.7200000000000001}]},{"kode_penyakit":"P001","nama_penyakit":"Dermatofitosis","persentase":0.8873205759999999,"iterasi_cf":[{"kode_gejala":"G01","nama_gejala":"Tidak nafsu makan","cf_user":"0.8","cf_pengetahuan":0.35,"cf_hasil":0.27999999999999997},{"kode_gejala":"G02","nama_gejala":"Kelihatan mengantuk","cf_user":"0.8","cf_pengetahuan":0.3,"cf_hasil":0.24},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"0.6","cf_pengetahuan":0.75,"cf_hasil":0.44999999999999996},{"kode_gejala":"G12","nama_gejala":"Kehilangan berat badan","cf_user":"0.8","cf_pengetahuan":0.35,"cf_hasil":0.27999999999999997}]},{"kode_penyakit":"P009","nama_penyakit":"Rhinosporidiosis","persentase":0.85,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"1","cf_pengetahuan":0.85,"cf_hasil":0.85}]},{"kode_penyakit":"P006","nama_penyakit":"Sporotrikosis","persentase":0.81904,"iterasi_cf":[{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.5,"cf_hasil":0.4},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"0.6","cf_pengetahuan":0.8,"cf_hasil":0.48},{"kode_gejala":"G11","nama_gejala":"Kemerahan pada area yang terkena","cf_user":"0.6","cf_pengetahuan":0.7,"cf_hasil":0.42}]},{"kode_penyakit":"P002","nama_penyakit":"Aspergillosis","persentase":0.792,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"1","cf_pengetahuan":0.6,"cf_hasil":0.6},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48}]},{"kode_penyakit":"P011","nama_penyakit":"Coccidioidomycosis","persentase":0.75,"iterasi_cf":[{"kode_gejala":"G21","nama_gejala":"Gangguan pernapasan","cf_user":"1","cf_pengetahuan":0.75,"cf_hasil":0.75}]},{"kode_penyakit":"P007","nama_penyakit":"Kriptokokosis","persentase":0.6,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"1","cf_pengetahuan":0.6,"cf_hasil":0.6}]},{"kode_penyakit":"P004","nama_penyakit":"Candidiasis","persentase":0.41200000000000003,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"1","cf_pengetahuan":0.3,"cf_hasil":0.3},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.8","cf_pengetahuan":0.2,"cf_hasil":0.16000000000000003}]},{"kode_penyakit":"P005","nama_penyakit":"Blastomikosis","persentase":0.4,"iterasi_cf":[{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.8","cf_pengetahuan":0.5,"cf_hasil":0.4}]},{"kode_penyakit":"P003","nama_penyakit":"Phaeohyphomycosis","persentase":0.39,"iterasi_cf":[{"kode_gejala":"G13","nama_gejala":"Sinusitis","cf_user":"0.6","cf_pengetahuan":0.65,"cf_hasil":0.39}]},{"kode_penyakit":"P010","nama_penyakit":"Mycetomas","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P012","nama_penyakit":"Malassezia dermatitis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P013","nama_penyakit":"Onychomycosis","persentase":0,"iterasi_cf":[]}]',
                'created_at' => '2024-12-03 15:28:18',
                'updated_at' => '2024-12-03 15:28:18',
            ],
            [
                'id' => 4,
                'id_users' => 2,
                'cfResults' => '{"G06":0.9,"G07":0.05,"G08":0.16000000000000003,"G09":0.08000000000000002,"G10":0.7}',
                'penyakitResults' => '[{"kode_penyakit":"P001","nama_penyakit":"Dermatofitosis","persentase":0.996672,"iterasi_cf":[{"kode_gejala":"G06","nama_gejala":"Kulit terlihat kemerahan bentuk lingkaran dan gatal-gatal","cf_user":"1","cf_pengetahuan":0.9,"cf_hasil":0.9},{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"1","cf_pengetahuan":0.6,"cf_hasil":0.6},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48},{"kode_gejala":"G09","nama_gejala":"Timbul keropeng pada kulit","cf_user":"0.8","cf_pengetahuan":0.45,"cf_hasil":0.36000000000000004},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"1","cf_pengetahuan":0.75,"cf_hasil":0.75}]},{"kode_penyakit":"P006","nama_penyakit":"Sporotrikosis","persentase":0.9563200000000001,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"1","cf_pengetahuan":0.3,"cf_hasil":0.3},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.5,"cf_hasil":0.4},{"kode_gejala":"G09","nama_gejala":"Timbul keropeng pada kulit","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"1","cf_pengetahuan":0.8,"cf_hasil":0.8}]},{"kode_penyakit":"P008","nama_penyakit":"Histoplasmosis","persentase":0.779752,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"1","cf_pengetahuan":0.05,"cf_hasil":0.05},{"kode_gejala":"G08","nama_gejala":"Terjadi kerusakan kulit","cf_user":"0.8","cf_pengetahuan":0.2,"cf_hasil":0.16000000000000003},{"kode_gejala":"G09","nama_gejala":"Timbul keropeng pada kulit","cf_user":"0.8","cf_pengetahuan":0.1,"cf_hasil":0.08000000000000002},{"kode_gejala":"G10","nama_gejala":"Terlihat jelas lesi dengan bentukan bulat simetris","cf_user":"1","cf_pengetahuan":0.7,"cf_hasil":0.7}]},{"kode_penyakit":"P004","nama_penyakit":"Candidiasis","persentase":0.25,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"1","cf_pengetahuan":0.25,"cf_hasil":0.25}]},{"kode_penyakit":"P005","nama_penyakit":"Blastomikosis","persentase":0.2,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"1","cf_pengetahuan":0.2,"cf_hasil":0.2}]},{"kode_penyakit":"P002","nama_penyakit":"Aspergillosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P003","nama_penyakit":"Phaeohyphomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P007","nama_penyakit":"Kriptokokosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P009","nama_penyakit":"Rhinosporidiosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P010","nama_penyakit":"Mycetomas","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P011","nama_penyakit":"Coccidioidomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P012","nama_penyakit":"Malassezia dermatitis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P013","nama_penyakit":"Onychomycosis","persentase":0,"iterasi_cf":[]}]',
                'created_at' => '2024-12-03 15:29:35',
                'updated_at' => '2024-12-03 15:29:35',
            ],
            [
                'id' => 5,
                'id_users' => 2,
                'cfResults' => '{"G20":0.32000000000000006,"G22":0.36000000000000004,"G23":0.3,"G39":0.12,"G44":0.34}',
                'penyakitResults' => '[{"kode_penyakit":"P002","nama_penyakit":"Aspergillosis","persentase":0.91332352,"iterasi_cf":[{"kode_gejala":"G20","nama_gejala":"Batuk, nafas cepat, bersin dan keluar leleran dari hidung","cf_user":"0.8","cf_pengetahuan":0.8,"cf_hasil":0.6400000000000001},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.4","cf_pengetahuan":0.6,"cf_hasil":0.24},{"kode_gejala":"G23","nama_gejala":"Leleran hidung dengan bau tidak sedap","cf_user":"0.6","cf_pengetahuan":0.75,"cf_hasil":0.44999999999999996},{"kode_gejala":"G39","nama_gejala":"Kucing menjadi kurang aktif","cf_user":"0.4","cf_pengetahuan":0.5,"cf_hasil":0.2},{"kode_gejala":"G44","nama_gejala":"Hidung tersumbat","cf_user":"0.4","cf_pengetahuan":0.7,"cf_hasil":0.27999999999999997}]},{"kode_penyakit":"P009","nama_penyakit":"Rhinosporidiosis","persentase":0.538,"iterasi_cf":[{"kode_gejala":"G23","nama_gejala":"Leleran hidung dengan bau tidak sedap","cf_user":"0.6","cf_pengetahuan":0.5,"cf_hasil":0.3},{"kode_gejala":"G44","nama_gejala":"Hidung tersumbat","cf_user":"0.4","cf_pengetahuan":0.85,"cf_hasil":0.34}]},{"kode_penyakit":"P005","nama_penyakit":"Blastomikosis","persentase":0.5212800000000001,"iterasi_cf":[{"kode_gejala":"G20","nama_gejala":"Batuk, nafas cepat, bersin dan keluar leleran dari hidung","cf_user":"0.8","cf_pengetahuan":0.4,"cf_hasil":0.32000000000000006},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.4","cf_pengetahuan":0.5,"cf_hasil":0.2},{"kode_gejala":"G39","nama_gejala":"Kucing menjadi kurang aktif","cf_user":"0.4","cf_pengetahuan":0.3,"cf_hasil":0.12}]},{"kode_penyakit":"P008","nama_penyakit":"Histoplasmosis","persentase":0.36000000000000004,"iterasi_cf":[{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.4","cf_pengetahuan":0.9,"cf_hasil":0.36000000000000004}]},{"kode_penyakit":"P007","nama_penyakit":"Kriptokokosis","persentase":0.24,"iterasi_cf":[{"kode_gejala":"G23","nama_gejala":"Leleran hidung dengan bau tidak sedap","cf_user":"0.6","cf_pengetahuan":0.4,"cf_hasil":0.24}]},{"kode_penyakit":"P004","nama_penyakit":"Candidiasis","persentase":0.08000000000000002,"iterasi_cf":[{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.4","cf_pengetahuan":0.2,"cf_hasil":0.08000000000000002}]},{"kode_penyakit":"P001","nama_penyakit":"Dermatofitosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P003","nama_penyakit":"Phaeohyphomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P006","nama_penyakit":"Sporotrikosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P010","nama_penyakit":"Mycetomas","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P011","nama_penyakit":"Coccidioidomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P012","nama_penyakit":"Malassezia dermatitis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P013","nama_penyakit":"Onychomycosis","persentase":0,"iterasi_cf":[]}]',
                'created_at' => '2024-12-03 15:31:36',
                'updated_at' => '2024-12-03 15:31:36',
            ],
            [
                'id' => 6,
                'id_users' => 2,
                'cfResults' => '{"G07":0.04000000000000001,"G03":0.51,"G22":0.54,"G14":0.33,"G25":0.24}',
                'penyakitResults' => '[{"kode_penyakit":"P008","nama_penyakit":"Histoplasmosis","persentase":0.770368,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"0.6","cf_pengetahuan":0.8,"cf_hasil":0.48},{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.05,"cf_hasil":0.04000000000000001},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.6","cf_pengetahuan":0.9,"cf_hasil":0.54}]},{"kode_penyakit":"P004","nama_penyakit":"Candidiasis","persentase":0.7060490239999999,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"0.6","cf_pengetahuan":0.3,"cf_hasil":0.18},{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.25,"cf_hasil":0.2},{"kode_gejala":"G14","nama_gejala":"Infeksi rongga hidung","cf_user":"0.6","cf_pengetahuan":0.55,"cf_hasil":0.33},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.6","cf_pengetahuan":0.2,"cf_hasil":0.12},{"kode_gejala":"G25","nama_gejala":"Bersin","cf_user":"0.6","cf_pengetahuan":0.4,"cf_hasil":0.24}]},{"kode_penyakit":"P002","nama_penyakit":"Aspergillosis","persentase":0.5904,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"0.6","cf_pengetahuan":0.6,"cf_hasil":0.36},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.6","cf_pengetahuan":0.6,"cf_hasil":0.36}]},{"kode_penyakit":"P009","nama_penyakit":"Rhinosporidiosis","persentase":0.51,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"0.6","cf_pengetahuan":0.85,"cf_hasil":0.51}]},{"kode_penyakit":"P001","nama_penyakit":"Dermatofitosis","persentase":0.48,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.6,"cf_hasil":0.48}]},{"kode_penyakit":"P005","nama_penyakit":"Blastomikosis","persentase":0.41200000000000003,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.2,"cf_hasil":0.16000000000000003},{"kode_gejala":"G22","nama_gejala":"Anoreksia","cf_user":"0.6","cf_pengetahuan":0.5,"cf_hasil":0.3}]},{"kode_penyakit":"P007","nama_penyakit":"Kriptokokosis","persentase":0.36,"iterasi_cf":[{"kode_gejala":"G03","nama_gejala":"Mulut terbuka karena sukar bernafas","cf_user":"0.6","cf_pengetahuan":0.6,"cf_hasil":0.36}]},{"kode_penyakit":"P006","nama_penyakit":"Sporotrikosis","persentase":0.24,"iterasi_cf":[{"kode_gejala":"G07","nama_gejala":"Gatal-gatal","cf_user":"0.8","cf_pengetahuan":0.3,"cf_hasil":0.24}]},{"kode_penyakit":"P003","nama_penyakit":"Phaeohyphomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P010","nama_penyakit":"Mycetomas","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P011","nama_penyakit":"Coccidioidomycosis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P012","nama_penyakit":"Malassezia dermatitis","persentase":0,"iterasi_cf":[]},{"kode_penyakit":"P013","nama_penyakit":"Onychomycosis","persentase":0,"iterasi_cf":[]}]',
                'created_at' => '2024-12-03 15:35:36',
                'updated_at' => '2024-12-03 15:35:36',
            ],
        ];

        $this->call(GejalaSeeder::class);
        $this->call(NamaPenyakitSeeder::class);
        $this->call(PengetahuanSeeder::class);
        $this->call(AnimasiSeeder::class);

        DB::table('riwayat')->insert($dataRiwayat);
    }
}
