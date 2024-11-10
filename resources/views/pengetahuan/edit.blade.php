@extends('index')

@section('content')
    <h1 class="text-center mb-4">Edit Pengetahuan</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <form action="{{ route('pengetahuan.update', $pengetahuan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
                            <select name="kode_penyakit" id="kode_penyakit" class="form-control select2-penyakit"
                                style="width: 100%;" required>
                                <option value="{{ $pengetahuan->penyakit->kode_penyakit }}">
                                    {{ $pengetahuan->penyakit->kode_penyakit }} -
                                    {{ $pengetahuan->penyakit->nama_penyakit }}</option>
                            </select>
                            @error('kode_penyakit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="kode_gejala" class="form-label">Kode Gejala</label>
                            <select name="kode_gejala" id="kode_gejala" class="form-control select2-gejala"
                                style="width: 100%;" required>
                                <option value="{{ $pengetahuan->gejala->kode_gejala }}">
                                    {{ $pengetahuan->gejala->kode_gejala }} - {{ $pengetahuan->gejala->nama_gejala }}
                                </option>
                            </select>
                            @error('kode_gejala')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nilai_cf" class="form-label">Nilai CF</label>
                            <input type="number" step="0.01" name="nilai_cf"
                                class="form-control @error('nilai_cf') is-invalid @enderror" id="nilai_cf"
                                value="{{ old('nilai_cf', $pengetahuan->nilai_cf) }}" required>
                            @error('nilai_cf')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                        <a href="{{ route('pengetahuan.index') }}" class="btn btn-info">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize Select2 for penyakit select
            $('.select2-penyakit').select2({
                placeholder: "Pilih Kode penyakit",
                allowClear: true,
                minimumInputLength: 2, // Minimum input length for searching
                ajax: {
                    url: "{{ route('penyakits.select2') }}",
                    dataType: 'json',
                    delay: 250, // Delay in milliseconds before the request is sent
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

            // Initialize Select2 for gejala select
            $('.select2-gejala').select2({
                placeholder: "Pilih Kode Gejala",
                allowClear: true,
                minimumInputLength: 2, // Minimum input length for searching
                ajax: {
                    url: "{{ route('gejalas.select2') }}",
                    dataType: 'json',
                    delay: 250, // Delay in milliseconds before the request is sent
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
@endpush
