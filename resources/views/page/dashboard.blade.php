@extends('index')
@section('content')
    <div class="container">
        <h1 class="text-center mb-3">Selamat datang di Dashboard Administrator</h1>
        <!-- Card Stats -->
        <div class="row">
            <!-- Card Total Gejala -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Total Gejala
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $total_gejala }} Gejala</h5>
                    </div>
                </div>
            </div>

            <!-- Card Total Penyakit -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Total Penyakit
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $total_penyakit }} Penyakit</h5>
                    </div>
                </div>
            </div>

            <!-- Card Total Pengetahuan -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Total Pengetahuan
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $total_pengetahuan }} Pengetahuan</h5>
                    </div>
                </div>
            </div>

            <!-- Card Total Pengguna -->
            <div class="col-md-3">
                <div class="card primary">
                    <div class="card-header bg-primary text-white">
                        Total Pengguna
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $total_pengguna }} Pengguna</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart & Pie Chart -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card primary">
                    <div class="card-header bg-primary text-white">
                        Diagnosa Seminggu Terakhir
                    </div>
                    <div class="card-body">

                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card primary">
                    <div class="card-header bg-primary text-white">
                        Penyakit Terdiagnosa
                    </div>
                    <div class="card-body">

                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custome_js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Bar Chart for Riwayat Penyakit (seminggu terakhir)
        var ctxBar = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: @json(
                    $riwayat_penyakit->pluck('created_at')->map(function ($date) {
                        return \Carbon\Carbon::parse($date)->format('d M Y');
                    })),
                datasets: [{
                    label: 'Jumlah Kejadian Penyakit',
                    data: @json(
                        $riwayat_penyakit->groupBy(function ($date) {
                                return \Carbon\Carbon::parse($date->created_at)->format('d M Y');
                            })->map(function ($item) {
                                return count($item);
                            })),
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Pie Chart for Penyakit Terdiagnosa
        var ctxPie = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                // Menampilkan nama penyakit sebagai label
                labels: @json(array_column($penyakit_chart_data, 'nama_penyakit')),
                datasets: [{
                    label: 'Penyakit Terdiagnosa',
                    // Menampilkan persentase kejadian untuk setiap penyakit
                    data: @json(array_column($penyakit_chart_data, 'jumlah_kejadiannya')),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
@endpush
