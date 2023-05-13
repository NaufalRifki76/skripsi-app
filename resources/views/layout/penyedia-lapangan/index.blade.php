@extends('layout.penyedia-lapangan.layout')

@section('mitra')
@include('layout.penyedia-lapangan.modal')
<div class="text-center">
    <h2 class="my-5" style="color: #439a97">Temukan data pemesan lapangan anda pada tabel di bawah!</h2>
</div>
<div class="card mt-5 border d-flex shadow p-3 m-5">
    <div class="row g-3">
        <div class="col-12">
            <label for="inputState" class="form-label">Data Pemesan Lapangan</label>

        </div>
        <table id="tabel-mitra" class="table table-striped table-bordered display" width="100%" cellspacing="0">
          <thead style="background-color: #439a97">
              <tr>
                  <th class="text-center">Nama Pemesan</th>
                  <th class="text-center">Lapangan</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Jam</th>
                  <th class="text-center">Total Harga</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Bukti Transfer</th>
                  <th class="text-center">Action</th>
              </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td>Naufal Fauzan</td>
              <td>A</td>
              <td>19/02/2023</td>
              <td>19.00 - 20.00<br></td>
              <td>155.000</td>
              <td><span class="badge bg-warning text-white">Pending</span></td>
              <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button></td>
              <td class="d-flex justify-content-center text-center">
                <button class="btn btn-sm btn-danger">Tolak</button>
                <button class="btn btn-sm btn-success ms-2">Terima</button>
                <a href="{{ route('mitra.detail-pemesanan') }}"><button class="btn btn-sm btn-primary ms-2 px-3"><i class="fa-sharp fa-solid fa-info"></i></button></a> 
            </td>
            </tr>
            <tr>
                <td>Faris Hakim</td>
                <td>A</td>
                <td>21/02/2023</td>
                <td>19.00 - 20.00<br></td>
                <td>155.000</td>
                <td><span class="badge bg-success text-white">Berhasil</span></td>
                <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button></td>
                <td class="d-flex justify-content-center text-center">
                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash px-1"></i></button>
                    <a href="{{ route('mitra.detail-pemesanan') }}"><button class="btn btn-sm btn-primary ms-2 px-3"><i class="fa-sharp fa-solid fa-info"></i></button></a>
                </td>
              </tr>
              <tr>
                <td>Galih</td>
                <td>A</td>
                <td>20/02/2023</td>
                <td>19.00 - 20.00<br></td>
                <td>155.000</td>
                <td><span class="badge bg-danger text-white">Ditolak</span></td>
                <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button></td>
                <td class="d-flex justify-content-center text-center">
                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash px-1"></i></button>
                    <a href="{{ route('mitra.detail-pemesanan') }}"><button class="btn btn-sm btn-primary ms-2 px-3"><i class="fa-sharp fa-solid fa-info"></i></button></a>
                </td>
              </tr>
          </tbody>
      </table>
    </div>
</div>

@push('css-mitra')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

        {{-- Data Tables --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    @endpush

    @push('script-mitra')
        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#inputState').select2({
                    theme: "bootstrap-5",
                });
            });
        </script>

        {{-- Data Table --}}
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabel-mitra').DataTable();
            });
        </script>
    @endpush
@endsection