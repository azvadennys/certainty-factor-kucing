@extends('index')

@section('content')
<h1 class="text-center mb-4">Tambah Penyakit</h1>
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <form action="{{ route('penyakits.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
                <input type="text" name="kode_penyakit" class="form-control" id="kode_penyakit" value="{{ $kode_penyakit }}" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                <input type="text" name="nama_penyakit" class="form-control @error('nama_penyakit') is-invalid @enderror" id="nama_penyakit" value="{{ old('nama_penyakit') }}" required>
                @error('nama_penyakit')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="foto_penyakit" class="form-label">Foto Penyakit</label>
                <input type="file" name="foto_penyakit" class="form-control @error('foto_penyakit') is-invalid @enderror" id="foto_penyakit">
                @error('foto_penyakit')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('penyakits.index') }}" class="btn btn-info">Kembali</a>
        </form>
    </div>
</div>

    @endsection
