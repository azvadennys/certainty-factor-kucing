@extends('index')

@push('custome_head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <h1 class="text-center mb-4">Edit Animasi</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{ route('animasi.update', $animasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" value="{{ old('nama', $animasi->nama) }}">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="video_animasi">Video Animasi Baru</label>
                    <input type="file" class="form-control @error('video_animasi') is-invalid @enderror"
                        id="video_animasi" name="video_animasi">
                    @if ($animasi->video_animasi)
                        <div class="mt-2">
                            <p>Video Animasi Lama:</p>
                            <video width="100%" controls>
                                <source src="{{ asset($animasi->video_animasi) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                    @error('video_animasi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="narator">Narator</label>
                    <textarea class="form-control @error('narator') is-invalid @enderror" id="narator" name="narator">{{ old('narator', $animasi->narator) }}</textarea>
                    @error('narator')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="id_serum">ID Serum:</label>
                    <select name="id_serum[]" id="id_serum" class="form-control js-example-basic-multiple"
                        multiple="multiple" required>
                        @foreach ($serum as $index)
                            <option value="{{ $index->kode_serum }}"
                                {{ in_array($index->kode_serum, old('id_serum', json_decode($animasi->id_serum, true) ?: [])) ? 'selected' : '' }}>
                                {{ $index->kode_serum }} | {{ $index->nama_serum }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_serum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('animasi.index') }}" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@push('custome_js')
    <!-- Initialize Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
