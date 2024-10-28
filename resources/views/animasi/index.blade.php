@extends('index')
@push('custome_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="">
        <h1>Daftar Animasi</h1>
        <a href="{{ route('animasi.create') }}" class="btn btn-primary mb-3">Tambah Animasi</a>
        <table class="table mt-3" id="table1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Animasi</th>
                    <th>Narator</th>
                    <th>Animasi</th>
                    <th>ID Penyakit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animasi as $index)
                    <tr>
                        <td>{{ $index->id }}</td>
                        <td>{{ $index->nama }}</td>
                        <td>{{ $index->narator }}</td>
                        <td class="text-center">
                            @if ($index->video_animasi)
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video autoplay loop muted playsinline class="embed-responsive-item"
                                        style="width: 100%;">
                                        <source src="{{ asset($index->video_animasi) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @else
                                No image
                            @endif
                        </td>
                        <td>
                            <ul>
                                @foreach ($index->penyakit_details as $penyakit_name)
                                    <li>
                                        <span class="badge badge-primary text-dark">{{ $penyakit_name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            {{-- <button class="btn btn-info btn-show" data-id="{{ $penyakit->kode_gejala }}">Show</button> --}}
                            <a href="{{ route('animasi.edit', $index->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('animasi.destroy', $index->id) }}" method="POST"
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
