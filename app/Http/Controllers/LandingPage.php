<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pengetahuan;
use App\Models\Penyakit;
use App\Models\Riwayat;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\View\View;

class LandingPage extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {

            $penyakit_terdiagnosa = [];

            $riwayats = Riwayat::all();
            foreach ($riwayats as $value) {
                $penyakitResults = json_decode($value->penyakitResults);
                // Ambil kode_penyakit dan nama_penyakit dari setiap entry
                if (isset($penyakitResults[0])) {
                    $penyakit_terdiagnosa[] = [
                        'kode_penyakit' => $penyakitResults[0]->kode_penyakit,
                        'nama_penyakit' => $penyakitResults[0]->nama_penyakit,
                    ];
                }
            }

            // Hitung frekuensi kemunculan kode penyakit
            $penyakit_count = [];
            foreach ($penyakit_terdiagnosa as $penyakit) {
                $penyakit_count[$penyakit['kode_penyakit']] = isset($penyakit_count[$penyakit['kode_penyakit']])
                ? $penyakit_count[$penyakit['kode_penyakit']] + 1
                : 1;
            }

            // Persiapkan data untuk chart
            $penyakit_chart_data = [];
            foreach ($penyakit_count as $kode_penyakit => $count) {
                $penyakit = collect($penyakit_terdiagnosa)->firstWhere('kode_penyakit', $kode_penyakit);
                $penyakit_chart_data[] = [
                    'kode_penyakit' => $kode_penyakit,
                    'nama_penyakit' => $penyakit['nama_penyakit'],
                    'jumlah_kejadiannya' => $count,
                ];
            }
            // Hitung total jumlah kejadian penyakit
            $total_kejadiannya = array_sum(array_column($penyakit_chart_data, 'jumlah_kejadiannya'));

            // Hitung persentase kemunculan untuk setiap penyakit
            foreach ($penyakit_chart_data as &$penyakit) {
                $penyakit['persentase'] = ($penyakit['jumlah_kejadiannya'] / $total_kejadiannya) * 100;
            }

            $data = [
                'total_gejala' => Gejala::all()->count(),
                'total_penyakit' => Penyakit::all()->count(),
                'total_pengetahuan' => Pengetahuan::all()->count(),
                'total_pengguna' => User::all()->count(),
                // Ambil riwayat penyakit dalam seminggu terakhir
                'riwayat_penyakit' => Riwayat::where('created_at', '>=', now()->subWeek())->get(),
                // Ambil jumlah penyakit terdiagnosa
                'penyakit_chart_data' => $penyakit_chart_data,
            ];
            // dd($penyakit_chart_data);
            return view('page.dashboard', $data);
        } else {
            return view('page.index');
        }
    }
}
