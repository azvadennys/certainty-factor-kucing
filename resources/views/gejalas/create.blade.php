@extends('index')

@section('content')
    <h1 class="text-center mb-4">Tambah Gejala</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <form action="{{ route('gejalas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="kode_gejala" class="form-label">Kode Gejala</label>
                            <input type="text" name="kode_gejala" class="form-control" id="kode_gejala"
                                value="{{ $kode_gejala }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_gejala" class="form-label">Nama Gejala</label>
                            <input type="text" name="nama_gejala"
                                class="form-control @error('nama_gejala') is-invalid @enderror" id="nama_gejala"
                                value="{{ old('nama_gejala') }}" required>
                            @error('nama_serum')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" class="form-select" aria-label="Kategori" required>
                                <option value="" disabled {{ old('kategori') === null ? 'selected' : '' }}>Pilih
                                    Kategori
                                </option>
                                <option value="Perubahan Nafsu Makan"
                                    {{ old('kategori') === 'Perubahan Nafsu Makan' ? 'selected' : '' }}>Perubahan Nafsu
                                    Makan</option>
                                <option value="Perubahan Mobilitas"
                                    {{ old('kategori') === 'Perubahan Mobilitas' ? 'selected' : '' }}>Perubahan Mobilitas
                                </option>
                                <option value="Perubahan Berat Badan"
                                    {{ old('kategori') === 'Perubahan Berat Badan' ? 'selected' : '' }}>Perubahan Berat
                                    Badan</option>
                                <option value="Perubahan Aktivitas"
                                    {{ old('kategori') === 'Perubahan Aktivitas' ? 'selected' : '' }}>Perubahan Aktivitas
                                </option>
                                <option value="Gangguan Telinga"
                                    {{ old('kategori') === 'Gangguan Telinga' ? 'selected' : '' }}>Gangguan Telinga</option>
                                <option value="Gangguan Sistemik"
                                    {{ old('kategori') === 'Gangguan Sistemik' ? 'selected' : '' }}>Gangguan Sistemik
                                </option>
                                <option value="Gangguan Sistem Imun"
                                    {{ old('kategori') === 'Gangguan Sistem Imun' ? 'selected' : '' }}>Gangguan Sistem Imun
                                </option>
                                <option value="Gangguan Pernapasan"
                                    {{ old('kategori') === 'Gangguan Pernapasan' ? 'selected' : '' }}>Gangguan Pernapasan
                                </option>
                                <option value="Gangguan Mata" {{ old('kategori') === 'Gangguan Mata' ? 'selected' : '' }}>
                                    Gangguan Mata</option>
                                <option value="Gangguan Kulit dan Rambut"
                                    {{ old('kategori') === 'Gangguan Kulit dan Rambut' ? 'selected' : '' }}>Gangguan Kulit
                                    dan Rambut</option>
                                <option value="Gangguan Kulit"
                                    {{ old('kategori') === 'Gangguan Kulit' ? 'selected' : '' }}>Gangguan Kulit</option>
                                <option value="Gangguan Kuku" {{ old('kategori') === 'Gangguan Kuku' ? 'selected' : '' }}>
                                    Gangguan Kuku</option>
                                <option value="Gangguan Genital"
                                    {{ old('kategori') === 'Gangguan Genital' ? 'selected' : '' }}>Gangguan Genital
                                </option>
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
