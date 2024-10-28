<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejalas = Gejala::all();
        return view('gejalas.index', compact('gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function generateSerumCode($lastCode)
    {
        $number = (int)substr($lastCode, 1);
        $newNumber = $number + 1;
        return 'G' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
    }

    public function create()
    {

        // Ambil kode_gejala terakhir dari database
        $lastSerum = Gejala::orderBy('kode_gejala', 'desc')->first();
        $lastCode = $lastSerum ? $lastSerum->kode_gejala : 'G000';
        $kode_gejala = GejalaController::generateSerumCode($lastCode);
        $data = [
            'kode_gejala' => $kode_gejala,
        ];
        return view('gejalas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejala|max:6',
            'nama_gejala' => 'required',
            'kategori' => 'required',
            'deskripsi_gejala' => 'nullable',
            'foto_gejala' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Adjust max size as per your requirements
        ]);

        // Buat objek gejala baru
        $gejala = new Gejala();
        $gejala->kode_gejala = $request->kode_gejala;
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->kategori = $request->kategori;
        $gejala->deskripsi_gejala = $request->deskripsi_gejala;

        if ($request->hasFile('foto_gejala')) {
            $file = $request->file('foto_gejala');
            $filename = $request->kode_gejala . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/gejalas');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $gejala->foto_gejala = 'images/gejalas/' . $filename;
        }

        $gejala->save();
        return redirect()->route('gejalas.index')->with('success', 'Gejala created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_gejala)
    {
        $gejala = Gejala::findOrFail($kode_gejala);
        return view('gejalas.show', compact('gejala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('gejalas.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_gejala)
    {
        $request->validate([
            'nama_gejala' => 'required',
            'kategori' => 'required',
            'deskripsi_gejala' => 'required',
        ]);

        $gejala = Gejala::findOrFail($kode_gejala);

        if ($request->hasFile('foto_gejala')) {
            // Delete old image if exists
            if ($gejala->foto_gejala && File::exists(public_path($gejala->foto_gejala))) {
                File::delete(public_path($gejala->foto_gejala));
            }
            $file = $request->file('foto_gejala');
            $filename = $request->kode_gejala . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/gejalas');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $gejala->foto_gejala = 'images/gejalas/' . $filename;
        }

        // Update other fields
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->kategori = $request->kategori;
        $gejala->deskripsi_gejala = $request->deskripsi_gejala;
        $gejala->save();

        return redirect()->route('gejalas.index')->with('success', 'Gejala updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_gejala)
    {
        $gejala = Gejala::findOrFail($kode_gejala);

        // Delete image if exists
        if ($gejala->foto_gejala && File::exists(public_path($gejala->foto_gejala))) {
            File::delete(public_path($gejala->foto_gejala));
        }

        // Delete the gejala record
        $gejala->delete();
        return redirect()->route('gejalas.index')->with('success', 'Gejala deleted successfully.');
    }
}
