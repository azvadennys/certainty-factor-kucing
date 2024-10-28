@extends('index')
@push('custome_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="p-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="mb-4">Daftar Riwayat</h1>
                <table class="table table-bordered" id="riwayat-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayats as $riwayat)
                            <tr>
                                <td>{{ $riwayat->id }}</td>
                                <td>{{ $riwayat->user->name }}</td>
                                <td>{{ $riwayat->created_at->format('d M Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('riwayat.show', $riwayat->id) }}" class="btn btn-info">View</a>
                                    <form action="{{ route('riwayat.destroy', $riwayat->id) }}" method="POST"
                                        style="display: inline;">
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
        </div>
    </div>
@endsection
@push('custome_js')
    <!-- Initialize DataTables -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#riwayat-table').DataTable();
        });
    </script>
@endpush
