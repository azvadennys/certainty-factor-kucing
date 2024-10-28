@extends('index')

@section('content')
<h1 class="text-center mb-4">Tambah Serum</h1>
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <form action="{{ route('serums.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="kode_serum" class="form-label">Kode Serum</label>
                <input type="text" name="kode_serum" class="form-control" id="kode_serum" value="{{ $kode_serum }}" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="nama_serum" class="form-label">Nama Serum</label>
                <input type="text" name="nama_serum" class="form-control @error('nama_serum') is-invalid @enderror" id="nama_serum" value="{{ old('nama_serum') }}" required>
                @error('nama_serum')
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
                <label for="foto_serum" class="form-label">Foto Serum</label>
                <input type="file" name="foto_serum" class="form-control @error('foto_serum') is-invalid @enderror" id="foto_serum">
                @error('foto_serum')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('serums.index') }}" class="btn btn-info">Kembali</a>
        </form>
    </div>
</div>

    @endsection
