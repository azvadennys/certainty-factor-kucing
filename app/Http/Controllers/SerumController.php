<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serum;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SerumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serums = Serum::all();
        return view('serums.index', compact('serums'));
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
        return 'S' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
    }

    public function create()
    {
        // Fungsi untuk menghasilkan kode_serum otomatis


        // Ambil kode_serum terakhir dari database
        $lastSerum = Serum::orderBy('kode_serum', 'desc')->first();
        $lastCode = $lastSerum ? $lastSerum->kode_serum : 'S000';
        $kode_serum = SerumController::generateSerumCode($lastCode);
        $data = [
            'kode_serum' => $kode_serum,
        ];
        return view('serums.create', $data);
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
            'kode_serum' => 'required|unique:serum|max:6',
            'nama_serum' => 'required',
            'deskripsi' => 'nullable',
            'foto_serum' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Adjust max size as per your requirements
        ]);

        // Buat objek serum baru
        $serum = new Serum();
        $serum->kode_serum = $request->kode_serum;
        $serum->nama_serum = $request->nama_serum;
        $serum->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto_serum')) {
            $file = $request->file('foto_serum');
            $filename = $request->kode_serum . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/serums');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $serum->foto_serum = 'images/serums/' . $filename;
        }

        $serum->save();
        return redirect()->route('serums.index')->with('success', 'Serum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_serum)
    {
        $serum = Serum::findOrFail($kode_serum);
        return view('serums.show', compact('serum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serum = Serum::findOrFail($id);
        return view('serums.edit', compact('serum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_serum)
    {
        $request->validate([
            'nama_serum' => 'required',
            'deskripsi' => 'required',
        ]);

        $serum = Serum::findOrFail($kode_serum);

        if ($request->hasFile('foto_serum')) {
            // Delete old image if exists
            if ($serum->foto_serum && File::exists(public_path($serum->foto_serum))) {
                File::delete(public_path($serum->foto_serum));
            }
            $file = $request->file('foto_serum');
            $filename = $request->kode_serum . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/serums');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $serum->foto_serum = 'images/serums/' . $filename;
        }

        // Update other fields
        $serum->nama_serum = $request->nama_serum;
        $serum->deskripsi = $request->deskripsi;
        $serum->save();

        return redirect()->route('serums.index')->with('success', 'Serum updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_serum)
    {
        $serum = Serum::findOrFail($kode_serum);

        // Delete image if exists
        if ($serum->foto_serum && File::exists(public_path($serum->foto_serum))) {
            File::delete(public_path($serum->foto_serum));
        }

        // Delete the serum record
        $serum->delete();
        return redirect()->route('serums.index')->with('success', 'Serum deleted successfully.');
    }
}
