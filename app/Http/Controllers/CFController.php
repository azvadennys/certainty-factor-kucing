<?php
// app/Http/Controllers/CFController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Pengetahuan;
use App\Models\Riwayat;
use App\Models\Penyakit;

class CFController extends Controller
{
    public function showForm()
    {
        $gejala = Gejala::orderBy('kategori')->get()->groupBy('kategori')->sortKeysDesc();
        // dd($gejala);
        return view('diagnosa.cf_form', compact('gejala'));
    }

    public function calculateCF(Request $request)
    {
        $userInput = $request->input('gejala');
        $cfResults = [];
        $penyakits = Penyakit::all();
        $penyakitResults = [];

        foreach ($penyakits as $penyakit) {
            $cf_penyakit = 0;
            $iterasiCF = [];

            $pengetahuans = Pengetahuan::where('kode_penyakit', $penyakit->kode_penyakit)->get();
            foreach ($pengetahuans as $pengetahuan) {
                $kodeGejala = $pengetahuan->kode_gejala;
                if (isset($userInput[$kodeGejala]) && $userInput[$kodeGejala] != 0) {
                    $userCF = $userInput[$kodeGejala];
                    $cf_pengetahuan = $pengetahuan->nilai_cf;
                    $cf = $userCF * $cf_pengetahuan;
                    $cfResults[$kodeGejala] = $cf;

                    // Simpan iterasi CF untuk ditampilkan
                    $iterasiCF[] = [
                        'kode_gejala' => $kodeGejala,
                        'nama_gejala' => $pengetahuan->gejala->nama_gejala,
                        'cf_user' => $userCF,
                        'cf_pengetahuan' => $cf_pengetahuan,
                        'cf_hasil' => $cf,
                    ];

                    // Hitung CF penyakit menggunakan rumus CF_kombinasi
                    $cf_penyakit += $cf * (1 - abs($cf_penyakit));
                }
            }

            // Tambahkan hasil per penyakit
            $penyakitResults[] = [
                'kode_penyakit' => $penyakit->kode_penyakit,
                'nama_penyakit' => $penyakit->nama_penyakit,
                'persentase' => $cf_penyakit,
                'iterasi_cf' => $iterasiCF,
            ];
            // Urutkan array $penyakitResults berdasarkan persentase dari terbesar ke terkecil
            usort($penyakitResults, function ($a, $b) {
                return $b['persentase'] <=> $a['persentase'];
            });
        }


        // Ubah iterasiCF menjadi format JSON untuk penyimpanan
        $cfResultsJson = json_encode($cfResults);
        $penyakitResultsJson = json_encode($penyakitResults);

        // Simpan ke dalam tabel riwayat
        $riwayat = new Riwayat();
        $riwayat->id_users = auth()->user()->id; // Sesuaikan dengan ID pengguna yang sesuai
        $riwayat->cfResults = $cfResultsJson;
        $riwayat->penyakitResults = $penyakitResultsJson;
        $riwayat->save();

        // Ambil ID dari data yang baru disimpan
        $riwayatId = $riwayat->id;

        // Redirect ke halaman riwayat.show dengan menyertakan ID riwayat
        return redirect()->route('riwayat.show', $riwayatId)->with('success', 'Data riwayat berhasil disimpan.');
    }
}
