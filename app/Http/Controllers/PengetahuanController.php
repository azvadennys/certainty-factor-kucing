<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pengetahuan;
use App\Models\Serum;
use Illuminate\Http\Request;

class PengetahuanController extends Controller
{
    public function index()
    {
        $pengetahuan = Pengetahuan::all();
        return view('pengetahuan.index', compact('pengetahuan'));
    }

    public function create()
    {
        $data = [
            'serums' => Serum::all(),
            'gejalas' => Gejala::all(),
        ];
        return view('pengetahuan.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_serum' => 'required',
            'kode_gejala' => 'required',
            'nilai_cf' => 'required',
        ]);
        // dd($request);
        Pengetahuan::create($request->all());

        return redirect()->route('pengetahuan.index')->with('success', 'Pengetahuan created successfully.');
    }

    public function edit($id)
    {
        $pengetahuan = Pengetahuan::where('id', $id)->firstOrFail();
        return view('pengetahuan.edit', compact('pengetahuan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nilai_cf' => 'required',
        ]);

        $pengetahuan = Pengetahuan::where('id', $id)->firstOrFail();
        $pengetahuan->update([
            'nilai_cf' => $request->nilai_cf,
        ]);

        return redirect()->route('pengetahuan.index')->with('success', 'Pengetahuan updated successfully.');
    }

    public function destroy($id)
    {
        $pengetahuan = Pengetahuan::where('id', $id)->firstOrFail();
        $pengetahuan->delete();

        return redirect()->route('pengetahuan.index')->with('success', 'Pengetahuan deleted successfully.');
    }

    public function select2Serum(Request $request)
    {
        $search = $request->term;

        $serums = Serum::where('kode_serum', 'LIKE', "%$search%")
            ->orWhere('nama_serum', 'LIKE', "%$search%")
            ->limit(10)
            ->get();

        $formattedSerums = [];

        foreach ($serums as $serum) {
            $formattedSerums[] = [
                'id' => $serum->kode_serum,
                'text' => $serum->kode_serum . ' - ' . $serum->nama_serum,
            ];
        }

        return response()->json($formattedSerums);
    }

    public function select2Gejala(Request $request)
    {
        $search = $request->term;

        $gejalas = Gejala::where('kode_gejala', 'LIKE', "%$search%")
            ->orWhere('nama_gejala', 'LIKE', "%$search%")
            ->limit(10)
            ->get();

        $formattedGejalas = [];

        foreach ($gejalas as $gejala) {
            $formattedGejalas[] = [
                'id' => $gejala->kode_gejala,
                'text' => $gejala->kode_gejala . ' - ' . $gejala->nama_gejala,
            ];
        }

        return response()->json($formattedGejalas);
    }
}
