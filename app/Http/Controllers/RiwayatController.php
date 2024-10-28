<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use App\Models\Riwayat;
use App\Models\Serum;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {

            $riwayats = Riwayat::all();
        } else {

            $riwayats = Riwayat::where('id_users', auth()->user()->id)->get();
        }
        return view('riwayat.index', compact('riwayats'));
    }

    public function show($id)
    {

        $riwayats = Riwayat::where('id', $id)->first();

        $cfResults = json_decode($riwayats->cfResults);
        $serumResults = json_decode($riwayats->serumResults);

        $serumTertinggi = $serumResults[0]->kode_serum;
        // Query menggunakan Eloquent untuk mencari data animasi berdasarkan id_serum
        $animasi = Animasi::whereJsonContains('id_serum', $serumTertinggi)->get();
        $serum = Serum::where('kode_serum', $serumTertinggi)->first();
        $serumAll = Serum::all();
        $url_back = url()->previous();

        return view('riwayat.show', compact('riwayats', 'cfResults', 'serumResults', 'animasi', 'serum', 'serumAll', 'url_back'));
    }

    public function destroy($id)
    {

        Riwayat::where('id', $id)->delete();

        return redirect()->to(route('riwayat.index'))->with('success', 'Berhasil Menghapus Riwayat');
    }
}
