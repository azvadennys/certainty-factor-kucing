@extends('index')

@section('content')
    <h1 class="text-center mb-4">Tambah Pengetahuan</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{ route('pengetahuan.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="kode_serum" class="form-label">Kode Serum</label>
                    <select name="kode_serum" id="kode_serum" class="form-control select2-serum" style="width: 100%;"
                        required>
                        <option value="">Pilih Kode Serum</option>
                        @foreach ($serums as $serum)
                            <option value="{{ $serum->kode_serum }}">{{ $serum->kode_serum }} - {{ $serum->nama_serum }}
                            </option>
                        @endforeach
                    </select>
                    @error('kode_serum')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                    <select name="kode_gejala" id="kode_gejala" class="form-control select2-gejala" style="width: 100%;"
                        required>
                        <option value="">Pilih Kode Gejala</option>
                        @foreach ($gejalas as $gejala)
                            <option value="{{ $gejala->kode_gejala }}">{{ $gejala->kode_gejala }} -
                                {{ $gejala->nama_gejala }}</option>
                        @endforeach
                    </select>
                    @error('kode_gejala')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nilai_cf" class="form-label">Nilai CF</label>
                    <input type="number" step="0.01" name="nilai_cf" class="form-control @error('nilai_cf') is-invalid @enderror"
                        id="nilai_cf" value="{{ old('nilai_cf') }}" required>
                    @error('nilai_cf')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <a href="{{ route('pengetahuan.index') }}" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>
@endsection
@push('custome_js')
    <script>
        $(document).ready(function() {
            // Initialize Select2 for serum select
            $('.select2-serum').select2({
                placeholder: "Pilih Kode Serum",
                allowClear: true,
                minimumInputLength: 2, // Minimum input length for searching
                ajax: {
                    url: "{{ route('serums.select2') }}",
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
