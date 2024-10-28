@extends('index')

@section('content')
    <h1 class="text-center mb-4">Tambah Gejala</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{ route('gejalas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                    <input type="text" name="kode_gejala" class="form-control" id="kode_gejala"
                        value="{{ $kode_gejala }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_gejala" class="form-label">Nama Gejala</label>
                    <input type="text" name="nama_gejala" class="form-control @error('nama_gejala') is-invalid @enderror"
                        id="nama_gejala" value="{{ old('nama_gejala') }}" required>
                    @error('nama_serum')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="kategori" class="form-select" aria-label="Kategori" required>
                        <option value="" disabled {{ old('kategori') === null ? 'selected' : '' }}>Pilih Kategori
                        </option>
                        <option value="Tipe Kulit" {{ old('kategori') === 'Tipe Kulit' ? 'selected' : '' }}>Tipe Kulit
                        </option>
                        <option value="Gejala Masalah Kulit Yang Sering Dialami"
                            {{ old('kategori') === 'Gejala Masalah Kulit Yang Sering Dialami' ? 'selected' : '' }}>Gejala
                            Masalah Kulit Yang Sering Dialami</option>
                        <option value="Gejala Masalah Kulit Lainnya"
                            {{ old('kategori') === 'Gejala Masalah Kulit Lainnya' ? 'selected' : '' }}>Gejala Masalah Kulit
                            Lainnya</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi_gejala" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi_gejala" class="form-control @error('deskripsi_gejala') is-invalid @enderror"
                        id="deskripsi_gejala">{{ old('deskripsi_gejala') }}</textarea>
                    @error('deskripsi_gejala')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="foto_gejala" class="form-label">Foto Gejala</label>
                    <input type="file" class="form-control" name="foto_gejala"
                        class="form-control-file @error('foto_gejala') is-invalid @enderror" id="foto_gejala">
                    @error('foto_gejala')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Tambahkan preview gambar -->
                <div class="form-group mb-3">
                    <img id="previewFoto" src="#" alt="Preview Foto"
                        style="display: none; max-width: 50%; margin-top: 10px;">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('gejalas.index') }}" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Script untuk preview gambar -->
    <script>
        function previewImage(input) {
            var preview = document.getElementById('previewFoto');
            preview.style.display = 'block';
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        }

        document.getElementById('foto_gejala').addEventListener('change', function() {
            previewImage(this);
        });
    </script>
@endsection
