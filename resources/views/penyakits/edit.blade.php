@extends('index')

@section('content')
    <h1 class="text-center mb-4">Edit Penyakit</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <form action="{{ route('penyakits.update', $penyakit->kode_penyakit) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
                            <input type="text" name="kode_penyakit" class="form-control" id="kode_penyakit"
                                value="{{ old('kode_penyakit', $penyakit->kode_penyakit) }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                            <input type="text" name="nama_penyakit" class="form-control" id="nama_penyakit"
                                value="{{ old('nama_penyakit', $penyakit->nama_penyakit) }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi">{{ old('deskripsi', $penyakit->deskripsi) }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="foto_penyakit" class="form-label">Foto Penyakit</label>
                            <input type="file" name="foto_penyakit" class="form-control" id="foto_penyakit"
                                onchange="previewImage(event)">
                            <h6 class="text-secondary">*Kosongkan jika tidak ingin ganti foto</h6>
                        </div>

                        {{-- Tampilkan foto terkini --}}
                        <div class="form-group mb-3" id="current_foto_section">
                            <label for="current_foto" class="form-label">Foto Penyakit Terkini</label><br>
                            @if ($penyakit->foto_penyakit)
                                <img id="current_foto" src="{{ asset($penyakit->foto_penyakit) }}" alt="Foto penyakit"
                                    height="200">
                            @else
                                <span class="text-secondary">Tidak ada foto terkini.</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary ">Update</button>
                        <a href="{{ route('penyakits.index') }}" class="btn btn-info">Kembali</a>
                    </form>
                </div>
            </div>
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
