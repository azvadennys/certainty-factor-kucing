<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengetahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengetahuan = [

                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G01', 'nilai_cf' => 0.35],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G02', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G05', 'nilai_cf' => 0.65],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G06', 'nilai_cf' => 0.9],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G07', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G08', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G09', 'nilai_cf' => 0.45],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G10', 'nilai_cf' => 0.75],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G04', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G12', 'nilai_cf' => 0.35],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G24', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G30', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G31', 'nilai_cf' => 0.45],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G34', 'nilai_cf' => 0.2],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G49', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P001', 'kode_gejala' => 'G60', 'nilai_cf' => 0.25],

                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G03', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G18', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G20', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G22', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G23', 'nilai_cf' => 0.75],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G39', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G44', 'nilai_cf' => 0.7],
                ['kode_penyakit' => 'P002', 'kode_gejala' => 'G46', 'nilai_cf' => 0.65],

                ['kode_penyakit' => 'P003', 'kode_gejala' => 'G13', 'nilai_cf' => 0.65],
                ['kode_penyakit' => 'P003', 'kode_gejala' => 'G46', 'nilai_cf' => 0.75],
                ['kode_penyakit' => 'P003', 'kode_gejala' => 'G19', 'nilai_cf' => 0.75],
                ['kode_penyakit' => 'P003', 'kode_gejala' => 'G26', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P003', 'kode_gejala' => 'G58', 'nilai_cf' => 0.6],

                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G03', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G07', 'nilai_cf' => 0.25],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G14', 'nilai_cf' => 0.55],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G15', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G22', 'nilai_cf' => 0.2],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G25', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G28', 'nilai_cf' => 0.65],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G50', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P004', 'kode_gejala' => 'G51', 'nilai_cf' => 0.9],

                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G07', 'nilai_cf' => 0.2],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G16', 'nilai_cf' => 0.95],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G17', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G19', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G20', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G22', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G27', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P005', 'kode_gejala' => 'G39', 'nilai_cf' => 0.3],

                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G07', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G08', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G09', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G10', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G11', 'nilai_cf' => 0.7],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G28', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G40', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G43', 'nilai_cf' => 0.2],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G52', 'nilai_cf' => 0.25],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G52', 'nilai_cf' => 0.25],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G53', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G54', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P006', 'kode_gejala' => 'G55', 'nilai_cf' => 0.2],

                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G03', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G23', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G27', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G47', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G48', 'nilai_cf' => 0.7],
                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G56', 'nilai_cf' => 0.7],
                ['kode_penyakit' => 'P007', 'kode_gejala' => 'G57', 'nilai_cf' => 0.3],

                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G03', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G07', 'nilai_cf' => 0.05],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G08', 'nilai_cf' => 0.2],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G09', 'nilai_cf' => 0.1],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G10', 'nilai_cf' => 0.7],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G11', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G17', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G22', 'nilai_cf' => 0.9],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G27', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G32', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P008', 'kode_gejala' => 'G59', 'nilai_cf' => 0.05],

                ['kode_penyakit' => 'P009', 'kode_gejala' => 'G03', 'nilai_cf' => 0.85],
                ['kode_penyakit' => 'P009', 'kode_gejala' => 'G23', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P009', 'kode_gejala' => 'G44', 'nilai_cf' => 0.85],
                ['kode_penyakit' => 'P009', 'kode_gejala' => 'G45', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P009', 'kode_gejala' => 'G43', 'nilai_cf' => 0.9],
                ['kode_penyakit' => 'P009', 'kode_gejala' => 'G46', 'nilai_cf' => 0.4],

                ['kode_penyakit' => 'P010', 'kode_gejala' => 'G28', 'nilai_cf' => 0.75],
                ['kode_penyakit' => 'P010', 'kode_gejala' => 'G52', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P010', 'kode_gejala' => 'G53', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P010', 'kode_gejala' => 'G54', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P010', 'kode_gejala' => 'G57', 'nilai_cf' => 0.3],

                ['kode_penyakit' => 'P011', 'kode_gejala' => 'G21', 'nilai_cf' => 0.75],
                ['kode_penyakit' => 'P011', 'kode_gejala' => 'G28', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P011', 'kode_gejala' => 'G32', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P011', 'kode_gejala' => 'G56', 'nilai_cf' => 0.4],
                ['kode_penyakit' => 'P011', 'kode_gejala' => 'G57', 'nilai_cf' => 0.4],

                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G24', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G29', 'nilai_cf' => 0.55],
                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G32', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G33', 'nilai_cf' => 0.9],
                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G34', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G38', 'nilai_cf' => 0.3],
                ['kode_penyakit' => 'P012', 'kode_gejala' => 'G49', 'nilai_cf' => 0.4],

                ['kode_penyakit' => 'P013', 'kode_gejala' => 'G35', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P013', 'kode_gejala' => 'G36', 'nilai_cf' => 0.85],
                ['kode_penyakit' => 'P013', 'kode_gejala' => 'G37', 'nilai_cf' => 0.8],
                ['kode_penyakit' => 'P013', 'kode_gejala' => 'G41', 'nilai_cf' => 0.6],
                ['kode_penyakit' => 'P013', 'kode_gejala' => 'G42', 'nilai_cf' => 0.5],
                ['kode_penyakit' => 'P013', 'kode_gejala' => 'G57', 'nilai_cf' => 0.4],
        ];

        DB::table('pengetahuan')->insert($pengetahuan);
    }
}
