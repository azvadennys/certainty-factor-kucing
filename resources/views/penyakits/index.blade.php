@extends('index')
@push('custome_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="p-4">
        <h1>Daftar Penyakit</h1>
        <a href="{{ route('penyakits.create') }}" class="btn btn-primary mb-3">Tambah Penyakit</a>
        <table class="table mt-3" id="table1">
            <thead>
                <tr>
                    <th>Kode penyakit</th>
                    <th>Nama penyakit</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penyakits as $penyakit)
                    <tr>
                        <td>{{ $penyakit->kode_penyakit }}</td>
                        <td>{{ $penyakit->nama_penyakit }}</td>
                        <td>{{ $penyakit->deskripsi }}</td>
                        <td class="text-center">
                            @if ($penyakit->foto_penyakit)
                                <img src="{{ asset($penyakit->foto_penyakit) }}" alt="{{ $penyakit->nama_penyakit }}" height="100">
                            @else
                                No image
                            @endif
                        </td>
                        <td>
                            {{-- <button class="btn btn-info btn-show" data-id="{{ $penyakit->kode_penyakit }}">Show</button> --}}
                            <a href="{{ route('penyakits.edit', $penyakit->kode_penyakit) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('penyakits.destroy', $penyakit->kode_penyakit) }}" method="POST"
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
                    <h5 class="modal-title" id="showModalLabel">Detail penyakit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="penyakitDetails">
                        <!-- Placeholder for penyakit details -->
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
                var penyakitId = $(this).data('id');
                $.ajax({
                    url: '/penyakits/' + penyakitId,
                    type: 'GET',
                    success: function(response) {
                        $('#penyakitDetails').html(response);
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
