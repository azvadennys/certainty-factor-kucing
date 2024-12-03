@extends('index')
@section('content')
    <div class="row justify-content-center">
        <!-- Text Section -->
        <div class="col-12 col-md-6 order-1 order-md-1 mb-4 mb-md-0">
            <h1 style="font-size: 90px; color: #000000; line-height: 1.2;">Periksakan</h1>
            <h1 style="font-size: 90px; color: #92D6FB; line-height: 1.2;">Kucing Anda</h1>
            <p style="text-align: justify;">Pemeriksaan kesehatan kucing secara rutin sangat bermanfaat untuk semua kucing.
                Selain memastikan bahwa sahabat Anda selalu dalam kondisi sehat dan berkembang dengan baik, pemeriksaan
                kesehatan rutin juga dapat memberikan wawasan tentang kebutuhan dan perilaku alami mereka.</p>
        </div>

        <!-- Image Section -->
        <div class="col-12 col-md-6 order-2 order-md-2">
            <img src="{{ asset('assets/img/Group 1.png') }}" alt="" class="img-fluid">
        </div>
    </div>
@endsection
