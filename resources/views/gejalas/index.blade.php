@extends('index')
@push('custome_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="p-4">
        <h1>Daftar Gejala</h1>
        <a href="{{ route('gejalas.create') }}" class="btn btn-primary mb-3">Tambah Gejala</a>
        <table class="table mt-3" id="table1">
            <thead>
                <tr>
                    <th>Kode Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gejalas as $index)
                    <tr>
                        <td>{{ $index->kode_gejala }}</td>
                        <td>{{ $index->nama_gejala }}</td>
                        <td>{{ $index->deskripsi_gejala }}</td>
                        <td class="text-center">
                            @if ($index->foto_gejala)
                                <img src="{{ asset($index->foto_gejala) }}" alt="{{ $index->nama_gejala }}" height="100">
                            @else
                                No image
                            @endif
                        </td>
                        <td>
                            {{-- <button class="btn btn-info btn-show" data-id="{{ $serum->kode_gejala }}">Show</button> --}}
                            <a href="{{ route('gejalas.edit', $index->kode_gejala) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('gejalas.destroy', $index->kode_gejala) }}" method="POST"
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
            $('#table1').DataTable();
        });
    </script>
@endpush
