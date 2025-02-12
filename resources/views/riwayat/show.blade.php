@extends('index')

@section('content')
    <h2 class="text-center mb-4">Hasil Diagnosa</h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <table class="table table-bordered mb-5" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Gejala Yang Dialami (Keluhan)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gejalaInput as $gejala)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $gejala->kode_gejala }}</td>
                            <td>{{ $gejala->nama_gejala }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ asset($penyakit->foto_penyakit) }}" class="card-img-top" alt="{{ $penyakit->nama_penyakit }}"
                    style="height: 300px; width: auto; object-fit: contain;">
                <div class="card-body">
                    <style>
                        .custom-span-style {
                            color: color-mix(in srgb, var(--default-color), transparent 30%);
                            margin: 5px 0 30px 0;
                            font-size: 20px;
                            font-weight: 400;
                        }
                    </style>

                    <h3 class="card-title text-center">
                        <b>{{ $penyakit->nama_penyakit }}</b>
                        <span class="custom-span-style"> / {{ round($penyakitResults[0]->persentase, 2) * 100 }}%
                            ({{ $penyakitResults[0]->persentase }}) </span>
                    </h3>

                    <p class="card-text" style="text-align: justify;">{{ $penyakit->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>


    <h2 class="text-center mt-5">Animasi</h2>
    <div class="row justify-content-center">
        @foreach ($animasi as $item)
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <video id="myVideo" autoplay loop muted playsinline class="embed-responsive-item"
                                style="width: 100%;">
                                <source src="{{ asset($item->video_animasi) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                        <!-- Tombol untuk unmute -->
                        <button class="btn btn-primary" id="unmuteButton">Unmute</button>

                        <script>
                            var video = document.getElementById('myVideo');
                            var unmuteButton = document.getElementById('unmuteButton');

                            // Menambahkan event listener untuk tombol unmute
                            unmuteButton.addEventListener('click', function() {
                                video.muted = false; // Menghapus mute saat tombol diklik
                                unmuteButton.style.display = 'none'; // Menyembunyikan tombol setelah suara diaktifkan
                            });
                        </script>

                        <p class="card-text mt-3">{{ $item->narator }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
    <h2 class="mt-5">Kemungkinan Lainnya</h2>
    <style>
        .modal-dialog-centered {
            padding-top: 10vh;
            padding-bottom: 5vh;
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
    </style>

    <table class="table table-bordered" id="table1">
        <thead>
            <tr>
                <th>Nama Penyakit</th>
                <th>Persentase Solusi</th>
                <th>Detail Iterasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach (array_slice($penyakitResults, 1) as $penyakit)
                <tr>
                    <td>{{ $penyakit->nama_penyakit }}</td>
                    <td>{{ round($penyakit->persentase, 2) * 100 }}% ({{ $penyakit->persentase * 100 }})</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#iterasiModal{{ $penyakit->kode_penyakit }}">
                            Detail Iterasi
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ $url_back }}" class="btn btn-warning">Kembali</a>

      </div>  </div>
    @foreach (array_slice($penyakitResults, 1) as $penyakit)
        @php
            $penyakitDetail = $penyakitAll->firstWhere('kode_penyakit', $penyakit->kode_penyakit);
        @endphp

        <!-- Modal for Iterasi CF -->
        <div class="modal modal-lg fade" id="iterasiModal{{ $penyakit->kode_penyakit }}" tabindex="-1" role="dialog"
            aria-labelledby="iterasiModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-lg  modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white" style="background-color: var(--accent-color)">
                        <h5 class="modal-title text-dark" id="iterasiModalLabel">Detail Iterasi CF:
                            {{ $penyakit->nama_penyakit }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center align-items-center mb-4">
                            <div class="col-md-10">
                                <div class="card text-center ">
                                    <img src="{{ asset($penyakitDetail->foto_penyakit) }}" class="card-img-top img-fluid"
                                        alt="{{ $penyakitDetail->nama_penyakit }}"
                                        style="height: 300px; object-fit: cover;">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>{{ $penyakitDetail->nama_penyakit }}</b></h3>
                                        <p class="card-text">{{ $penyakitDetail->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>Kode Gejala</th>
                                    <th>Nama Gejala</th>
                                    <th>CF User</th>
                                    <th>CF Pengetahuan</th>
                                    {{-- <th>CF Hasil</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penyakit->iterasi_cf as $iterasi)
                                    <tr>
                                        <td>{{ $iterasi->kode_gejala }}</td>
                                        <td>{{ $iterasi->nama_gejala }}</td>
                                        <td>{{ $iterasi->cf_user }}</td>
                                        <td>{{ $iterasi->cf_pengetahuan }}</td>
                                        {{-- <td>{{ $iterasi->cf_hasil }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    @endforeach
@endsection
