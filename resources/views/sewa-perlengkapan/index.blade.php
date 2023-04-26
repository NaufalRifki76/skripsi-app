@extends('layout.index')

@section('content')
    <div class="container">

        <div>
            <p class="h1 fw-bold text-center mb-2" style="color: #439A97">Sewa Perlengkapan</p>
        </div>
        <div>
            <p class="h4 fw-normal text-center mb-5" style="color: #FCE700">Cari lapangan yang menyediakan sewa perlengkapan
                yang anda butuhkan
                dengan mudah di sini !</p>
        </div>

        <form class="row g-3 mx-5">
            <div class="col-12">
                <label for="inputState" class="form-label">Nama Lapangan</label>
                <select id="inputState" class="form-select">
                    <option selected>Pilih lapangan dimana anda ingin sewa perlengkapan ...</option>
                    <option value="1">Lapangan Futsal A</option>
                    <option value="2">Lapangan Futsal B</option>
                    <option value="3">Lapangan Futsal C</option>
                </select>
            </div>
        </form>

        {{-- jika belom milih lapangan muncul tulisan dibawah, juka sudah pilih lapangan hilang --}}
        <p class="h4 fw-normal text-center my-5" style="color: #FCE700">Pilih lapangan terlebih dahulu!</p>

        {{-- Jika belum milih lapangan tidak akan muncul card dibawah, jika sudah milih lapangan akan muncul card dibawah --}}
        <div class="card mt-5 border d-flex shadow p-3 mx-3">
            <div class="row g-3">
                <div class="col-12">
                    <label for="inputState" class="form-label">Jenis perlengkapan yang tersedia di "Nama Lapangan"</label>

                </div>
                <table id="tabel-kompetisi-umur" class="table table-striped table-bordered display" width="100%" cellspacing="0">
                  <thead style="background-color: #439a97">
                      <tr>
                          <th class="text-center">Nama perlengkapan</th>
                          <th class="text-center">Jumlah</th>
                          <th class="text-center">Harga Sewa (per-sesi)</th>
                      </tr>
                  </thead>
              </table>
            </div>
        </div>
    </div>

    @push('css')
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

    @push('script')
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
                $('#tabel-kompetisi-umur').DataTable();
            });
        </script>
    @endpush
@endsection
