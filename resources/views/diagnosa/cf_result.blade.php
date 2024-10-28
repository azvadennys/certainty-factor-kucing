@extends('index')

@section('content')
    <div class="container mt-5">
        <h2>Hasil Perhitungan Certainty Factor</h2>

        @foreach ($serumResults as $serum)
            <h3>Serum: {{ $serum['nama_serum'] }} (Kode Serum: {{ $serum['kode_serum'] }})</h3>
            <h4>Persentase Solusi: {{ $serum['persentase'] * 100 }}%</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Gejala</th>
                        <th>Nama Gejala</th>
                        <th>CF User</th>
                        <th>CF Pengetahuan</th>
                        <th>CF Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($serum['iterasi_cf'] as $iterasi)
                        <tr class="iterasi-cf">
                            <td>{{ $iterasi['kode_gejala'] }}</td>
                            <td>{{ $iterasi['nama_gejala'] }}</td>
                            <td>{{ $iterasi['cf_user'] }}</td>
                            <td>{{ $iterasi['cf_pengetahuan'] }}</td>
                            <td>{{ $iterasi['cf_hasil'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
        @endforeach
    </div>
@endsection
