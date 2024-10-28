@extends('index')

@section('content')
    <h1 class="text-center mb-4">Edit Gejala</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{ route('gejalas.update', $gejala->kode_gejala) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                    <input type="text" name="kode_gejala" class="form-control" id="kode_gejala"
                        value="{{ old('kode_gejala', $gejala->kode_gejala) }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_gejala" class="form-label">Nama Gejala</label>
                    <input type="text" name="nama_gejala" class="form-control" id="nama_gejala"
                        value="{{ old('nama_gejala', $gejala->nama_gejala) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="kategori" class="form-select" aria-label="Kategori" required>
                        <option value="" disabled {{ old('kategori', $gejala->kategori) === null ? 'selected' : '' }}>
                            Pilih Kategori
                        </option>
                        <option value="Tipe Kulit"
                            {{ old('kategori', $gejala->kategori) === 'Tipe Kulit' ? 'selected' : '' }}>Tipe Kulit
                        </option>
                        <option value="Gejala Masalah Kulit Yang Sering Dialami"
                            {{ old('kategori', $gejala->kategori) === 'Gejala Masalah Kulit Yang Sering Dialami' ? 'selected' : '' }}>
                            Gejala
                            Masalah Kulit Yang Sering Dialami</option>
                        <option value="Gejala Masalah Kulit Lainnya"
                            {{ old('kategori', $gejala->kategori) === 'Gejala Masalah Kulit Lainnya' ? 'selected' : '' }}>
                            Gejala Masalah Kulit
                            Lainnya</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi_gejala" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi_gejala" class="form-control" id="deskripsi_gejala">{{ old('deskripsi_gejala', $gejala->deskripsi_gejala) }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="foto_gejala" class="form-label">Foto Gejala</label>
                    <input type="file" name="foto_gejala" class="form-control" id="foto_gejala"
                        onchange="previewImage(event)">
                    <h6 class="text-secondary">*Kosongkan jika tidak ingin ganti foto</h6>
                </div>

                {{-- Tampilkan foto terkini --}}
                <div class="form-group mb-3" id="current_foto_section">
                    <label for="current_foto" class="form-label">Foto Serum Terkini</label><br>
                    @if ($gejala->foto_gejala)
                        <img id="current_foto" src="{{ asset($gejala->foto_gejala) }}" alt="Foto Serum" height="200">
                    @else
                        <span class="text-secondary">Tidak ada foto terkini.</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-block ">Update</button>
                <a href="{{ route('gejalas.index') }}" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>

    {{-- JavaScript untuk pratinjau foto --}}
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('current_foto');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
