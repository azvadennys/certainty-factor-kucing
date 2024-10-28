@extends('index')
@push('custome_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="p-4">
        <h1 class="mb-4">Daftar Pengetahuan</h1>
        <a href="{{ route('pengetahuan.create') }}" class="btn btn-primary mb-3">Tambah Pengetahuan</a>
        <table class="table" id="pengetahuan-table">
            <thead>
                <tr>
                    <th class="text-center">Kode Penyakit</th>
                    <th class="text-center">Kode Gejala</th>
                    <th class="text-center">Nilai CF</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengetahuan as $item)
                    <tr class="text-center">
                        <td><b>{{ $item->kode_penyakit }}</b></td>
                        <td><b>{{ $item->kode_gejala }}</b></td>
                        <td><b>{{ $item->nilai_cf }}</b></td>
                        <td>
                            <a href="{{ route('pengetahuan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pengetahuan.destroy', $item->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('custome_js')
    <!-- Initialize DataTables -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#pengetahuan-table').DataTable();
        });
    </script>
@endpush
