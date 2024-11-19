@extends('index')
@push('custome_head')
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endpush
@section('content')
    <div class="container">
        <h2 class="text-center">Konsultasi Penyakit Infeksi Jamur Pada Kucing</h2>
        <p class="text-center">Selamat datang di Sistem Pakar Diagnosa Penyakit Infeksi Jamur Kucing, tempat terbaik untuk
            mendapatkan informasi dan konsultasi seputar penyakit infeksi jamur pada kucing. Kami memahami betapa pentingnya
            kesehatan hewan peliharaan Anda dan siap membantu mengidentifikasi serta memberikan solusi untuk mengatasi
            berbagai masalah infeksi jamur yang dapat mengganggu kenyamanan kucing kesayangan Anda.</p>
        <form method="post" action="{{ route('calculate.cf') }}" id="cfForm">
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered " style="border:#5cc5fd">
                    <thead style="--bs-table-bg: #5cc5fd; --bs-table-color:rgb(0, 0, 0);" class="text-white">
                        <tr>
                            <th class="text-center">KODE GEJALA</th>
                            <th>NAMA GEJALA</th>
                            <th>KONDISI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejala as $kategori => $items)
                            <tr>
                                <td class="text-left" colspan="5" style="color: #5cc5fd"><b>{{ $kategori }}</b></td>
                            </tr>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="text-center align-middle"><b>{{ $item['kode_gejala'] }}</b></td>
                                    <td class="align-middle">{{ ucwords($item['nama_gejala']) }}</td>
                                    <td>
                                        <select id="gejala_{{ $item['kode_gejala'] }}"
                                            name="gejala[{{ $item['kode_gejala'] }}]" class="form-control cf-select">
                                            <option value="0">Tidak Yakin</option>
                                            <option value="0.2">Kurang Yakin</option>
                                            <option value="0.4">Sedikit Yakin</option>
                                            <option value="0.6">Cukup Yakin</option>
                                            <option value="0.8">Yakin</option>
                                            <option value="1">Sangat Yakin</option>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#detailModal" data-kode="{{ $item['kode_gejala'] }}"
                                            data-nama="{{ ucwords($item['nama_gejala']) }}"
                                            data-deskripsi="{{ $item['deskripsi_gejala'] }}"
                                            data-foto="{{ asset($item['foto_gejala']) }}">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" id="submitBtn">Lanjutkan Konsultasi</button>
            <a href="{{ route('home') }}" class="btn btn-warning">Kembali</a>
        </form>
    </div>
    <style>
        .modal-dialog-centered {
            padding-top: 10vh;
            padding-bottom: 5vh;
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
    </style>
    <!-- Modal -->
    <div class="modal modal-lg fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--accent-color);">
                    <h5 class="modal-title text-white" id="detailModalLabel">Detail Gejala</h5>

                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                        <img id="modalFotoGejala" src="" alt="Foto Gejala" class="img-fluid rounded"
                            style="height: 300px; object-fit: cover;">
                    </div>

                    <p><strong>Kode Gejala:</strong> <span id="modalKodeGejala"></span><br>
                        <strong>Nama Gejala:</strong> <span id="modalNamaGejala"></span><br>
                        <strong>Deskripsi Gejala:</strong> <span id="modalDeskripsiGejala"></span>
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Peringatan -->
    <div class="modal fade" id="peringatanModal" tabindex="-1" role="dialog" aria-labelledby="peringatanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #dc3545;">
                    <h5 class="modal-title text-white" id="peringatanModalLabel"><b>Peringatan!</b></h5>

                </div>
                <div class="modal-body" id="peringatanModalBody">
                    <!-- Pesan akan diisi oleh JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"
                        id="closePeringatanModal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custome_js')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $('#detailModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var kode = button.data('kode');
            var nama = button.data('nama');
            var deskripsi = button.data('deskripsi');
            var foto = button.data('foto');
            var modal = $(this);
            modal.find('#modalKodeGejala').text(kode);
            modal.find('#modalNamaGejala').text(nama);
            modal.find('#modalDeskripsiGejala').text(deskripsi);
            modal.find('#modalFotoGejala').attr('src', foto);
        });

        // Form validation
        document.getElementById('submitBtn').addEventListener('click', function() {
            var cfSelects = document.querySelectorAll('.cf-select');
            var validCount = 0;

            cfSelects.forEach(function(select) {
                if (parseFloat(select.value) > 0) {
                    validCount++;
                }
            });
            var totalGejala = cfSelects.length;
            if (validCount < 3) {
                Swal.fire({
                    title: 'Error',
                    text: "Silakan pilih setidaknya 3 gejala dengan kondisi selain Tidak Ada untuk melanjutkan!",
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                })
                // document.getElementById('peringatanModalBody').innerHTML = '<p>Silakan pilih setidaknya 3 gejala dengan kondisi selain <b>Tidak Ada</b> untuk melanjutkan.</p>';
                // $('#peringatanModal').modal('show');
            } else if (validCount === totalGejala) {
                Swal.fire({
                    title: 'Error',
                    text: "Pemilihan gejala Tidak Valid. Silakan pilih sesuai dengan keadaan untuk melanjutkan!",
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                })
                // document.getElementById('peringatanModalBody').innerHTML = '<p>Pemilihan gejala <b>Tidak Valid</b>. Silakan pilih sesuai dengan keadaan untuk melanjutkan.</p>';
                // $('#peringatanModal').modal('show');
            } else {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda akan melanjutkan konsultasi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, lanjutkan!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('cfForm').submit();
                    }
                });
            }
        });
        // Close modal on OK button click
        document.getElementById('closePeringatanModal').addEventListener('click', function() {
            $('#peringatanModal').modal('hide');
        });
    </script>
@endpush
