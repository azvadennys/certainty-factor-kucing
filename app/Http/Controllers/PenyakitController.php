<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('penyakits.index', compact('penyakits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function generatepenyakitCode($lastCode)
    {
        $number = (int)substr($lastCode, 1);
        $newNumber = $number + 1;
        return 'P' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
    }

    public function create()
    {
        // Fungsi untuk menghasilkan kode_penyakit otomatis


        // Ambil kode_penyakit terakhir dari database
        $lastpenyakit = Penyakit::orderBy('kode_penyakit', 'desc')->first();
        $lastCode = $lastpenyakit ? $lastpenyakit->kode_penyakit : 'S000';
        $kode_penyakit = PenyakitController::generatepenyakitCode($lastCode);
        $data = [
            'kode_penyakit' => $kode_penyakit,
        ];
        return view('penyakits.create', $data);
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
            'kode_penyakit' => 'required|unique:penyakit|max:6',
            'nama_penyakit' => 'required',
            'deskripsi' => 'nullable',
            'foto_penyakit' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Adjust max size as per your requirements
        ]);

        // Buat objek penyakit baru
        $penyakit = new Penyakit();
        $penyakit->kode_penyakit = $request->kode_penyakit;
        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto_penyakit')) {
            $file = $request->file('foto_penyakit');
            $filename = $request->kode_penyakit . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/penyakit');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $penyakit->foto_penyakit = 'images/penyakit/' . $filename;
        }

        $penyakit->save();
        return redirect()->route('penyakits.index')->with('success', 'penyakit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_penyakit)
    {
        $penyakit = Penyakit::findOrFail($kode_penyakit);
        return view('penyakits.show', compact('penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return view('penyakits.edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_penyakit)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
        ]);

        $penyakit = penyakit::findOrFail($kode_penyakit);

        if ($request->hasFile('foto_penyakit')) {
            // Delete old image if exists
            if ($penyakit->foto_penyakit && File::exists(public_path($penyakit->foto_penyakit))) {
                File::delete(public_path($penyakit->foto_penyakit));
            }
            $file = $request->file('foto_penyakit');
            $filename = $request->kode_penyakit . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/penyakit');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $penyakit->foto_penyakit = 'images/penyakit/' . $filename;
        }

        // Update other fields
        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->deskripsi = $request->deskripsi;
        $penyakit->save();

        return redirect()->route('penyakits.index')->with('success', 'penyakit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_penyakit)
    {
        $penyakit = penyakit::findOrFail($kode_penyakit);

        // Delete image if exists
        if ($penyakit->foto_penyakit && File::exists(public_path($penyakit->foto_penyakit))) {
            File::delete(public_path($penyakit->foto_penyakit));
        }

        // Delete the penyakit record
        $penyakit->delete();
        return redirect()->route('penyakits.index')->with('success', 'penyakit deleted successfully.');
    }
}
