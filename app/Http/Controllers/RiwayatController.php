<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use App\Models\Riwayat;
use App\Models\Penyakit;
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
        $penyakitResults = json_decode($riwayats->penyakitResults);

        $penyakitTertinggi = $penyakitResults[0]->kode_penyakit;
        // Query menggunakan Eloquent untuk mencari data animasi berdasarkan id_penyakit
        $animasi = Animasi::whereJsonContains('id_penyakit', $penyakitTertinggi)->get();
        $penyakit = Penyakit::where('kode_penyakit', $penyakitTertinggi)->first();
        $penyakitAll = Penyakit::all();
        $url_back = url()->previous();

        return view('riwayat.show', compact('riwayats', 'cfResults', 'penyakitResults', 'animasi', 'penyakit', 'penyakitAll', 'url_back'));
    }

    public function destroy($id)
    {

        Riwayat::where('id', $id)->delete();

        return redirect()->to(route('riwayat.index'))->with('success', 'Berhasil Menghapus Riwayat');
    }
}
