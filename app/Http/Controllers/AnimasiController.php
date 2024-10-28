<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AnimasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animasi = Animasi::all();
        $penyakits = Penyakit::all()->pluck('nama_penyakit', 'kode_penyakit')->toArray();

        foreach ($animasi as $index) {
            $penyakit_ids = json_decode($index->id_penyakit);
            $index->penyakit_details = array_map(function ($id) use ($penyakits) {
                return isset($penyakits[$id]) ? "($id) | {$penyakits[$id]}" : "($id) | Unknown Penyakit";
            }, $penyakit_ids);
        }

        return view('animasi.index', compact('animasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $penyakit = Penyakit::all();
        $data = [
            'penyakit' => $penyakit,
        ];
        return view('animasi.create', $data);
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
            'nama' => 'required|string|max:255',
            'video_animasi' => 'required|file|mimetypes:video/avi,video/mpeg,video/mp4,video/quicktime',
            'narator' => 'required|string',
            'id_penyakit' => 'required|array',
        ]);

        // $videoPath = $request->file('video_animasi')->store('images/animasi', 'public');
        $file = $request->file('video_animasi');
        $filename = $request->nama . '_' . time() . '.' . $file->getClientOriginalExtension();

        // Pastikan direktori penyimpanan ada
        $directoryPath = public_path('images/animasi');
        if (!file_exists($directoryPath)) {
            mkdir($directoryPath, 0777, true);
        }

        // Pindahkan file ke direktori publik menggunakan move_uploaded_file
        $file->move($directoryPath, $filename);
        $videoPath = 'images/animasi/' . $filename;

        Animasi::create([
            'nama' => $request->input('nama'),
            'video_animasi' => $videoPath,
            'narator' => $request->input('narator'),
            'id_penyakit' => json_encode($request->input('id_penyakit')),
        ]);

        return redirect()->route('animasi.index')->with('success', 'Animasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_gejala)
    {
        $gejala = Animasi::findOrFail($kode_gejala);
        return view('animasi.show', compact('gejala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animasi = Animasi::findOrFail($id);
        $penyakit = Penyakit::all();
        return view('animasi.edit', compact('animasi', 'penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'video_animasi' => 'nullable|file|mimetypes:video/avi,video/mpeg,video/mp4,video/quicktime',
            'narator' => 'required|string',
            'id_penyakit' => 'required|array',
        ]);

        // Ambil data animasi yang akan diupdate
        $animasi = Animasi::findOrFail($id);

        // Hapus file video lama jika ada
        if ($request->hasFile('video_animasi')) {
            File::delete(public_path($animasi->video_animasi)); // Hapus file lama dari storage
            $file = $request->file('video_animasi');

            $filename = $request->nama . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Pastikan direktori penyimpanan ada
            $directoryPath = public_path('images/animasi');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }

            // Pindahkan file ke direktori publik menggunakan move_uploaded_file
            $file->move($directoryPath, $filename);
            $videoPath = 'images/animasi/' . $filename;
        } else {
            // Jika tidak ada file video baru diupload, gunakan video lama
            $videoPath = $animasi->video_animasi;
        }

        // Update data animasi
        $animasi->nama = $request->input('nama');
        $animasi->video_animasi = $videoPath;
        $animasi->narator = $request->input('narator');
        $animasi->id_penyakit = json_encode($request->input('id_penyakit'));
        $animasi->save();

        return redirect()->route('animasi.index')->with('success', 'Animasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_gejala)
    {
        $animasi = Animasi::findOrFail($kode_gejala);

        // Delete image if exists
        if ($animasi->video_animasi && File::exists(public_path($animasi->video_animasi))) {
            File::delete(public_path($animasi->video_animasi));
        }

        // Delete the gejala record
        $animasi->delete();
        return redirect()->route('animasi.index')->with('success', 'Animasi deleted successfully.');
    }
}
