@extends('index')
@push('custome_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="p-4">
        <h1>Daftar Serum</h1>
        <a href="{{ route('serums.create') }}" class="btn btn-primary mb-3">Tambah Serum</a>
        <table class="table mt-3" id="table1">
            <thead>
                <tr>
                    <th>Kode Serum</th>
                    <th>Nama Serum</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serums as $serum)
                    <tr>
                        <td>{{ $serum->kode_serum }}</td>
                        <td>{{ $serum->nama_serum }}</td>
                        <td>{{ $serum->deskripsi }}</td>
                        <td class="text-center">
                            @if ($serum->foto_serum)
                                <img src="{{ asset($serum->foto_serum) }}" alt="{{ $serum->nama_serum }}" height="100">
                            @else
                                No image
                            @endif
                        </td>
                        <td>
                            {{-- <button class="btn btn-info btn-show" data-id="{{ $serum->kode_serum }}">Show</button> --}}
                            <a href="{{ route('serums.edit', $serum->kode_serum) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('serums.destroy', $serum->kode_serum) }}" method="POST"
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

    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showModalLabel">Detail Serum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="serumDetails">
                        <!-- Placeholder for serum details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custome_js')
    <!-- Initialize DataTables -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table1').DataTable();

            // Handle Show button click to open modal and load details
            $('.btn-show').click(function() {
                var serumId = $(this).data('id');
                $.ajax({
                    url: '/serums/' + serumId,
                    type: 'GET',
                    success: function(response) {
                        $('#serumDetails').html(response);
                        $('#showModal').modal('show');
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endpush
