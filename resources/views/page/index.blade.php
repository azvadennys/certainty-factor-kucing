@extends('index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card shadow-lg border-0 rounded-lg mb-4">
                    <div class="card-body p-5">
                        <h1 class="display-4 mb-4" style="color: var(--accent-color);">Selamat Datang!</h1>
                        <h2 class="h4 mb-3 text-dark">Sistem Pakar Diagnosa penyakit Jamur Pada Kucing</h2>
                        <p class="lead text-muted">Pemeriksaan kesehatan kucing secara rutin sangat bermanfaat untuk semua kucing. Selain memastikan bahwa sahabat Anda selalu dalam kondisi sehat dan berkembang dengan baik,  pemeriksaan kesehatan rutin juga dapat memberikan wawasan tentang kebutuhan dan perilaku alami mereka. </p>
                        <a href="{{ route('diagnosa') }}" class="btn btn-primary btn-lg mt-4">Mulai
                            Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @auth

        {{-- @if (auth()->user()->role == 'admin')
            <div class='row'>
                <div class='col-lg-3 col-xs-6'>
                    <!-- small box -->
                    <div class='small-box bg-aqua'>
                        <div class='inner'>
                            <h3>{{ $total_gejala }}</h3>
                            <p>Total Gejala</p>
                        </div>
                        <div class='icon'>
                            <i class='ion ion-thermometer'></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $total_penyakit }}</h3>

                            <p>Total penyakit</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-beaker"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $total_pengetahuan }}</h3>
                            <p>Total Pengetahuan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-erlenmeyer-flask"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $total_pengguna }}</h3>
                            <p>Total Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
        @endif --}}
    @endauth
@endsection
