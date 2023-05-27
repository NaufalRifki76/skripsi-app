@extends('layout.penyedia-lapangan.layout')

@section('mitra')
{{-- @include('layout.penyedia-lapangan.modal') --}}
<div class="mx-5 my-3">
    @include('session-flash')
</div>
<div class="text-center">
    <h2 class="my-5" style="color: #439a97">Temukan data pemesan lapangan anda pada tabel di bawah!</h2>
</div>
<div class="card mt-5 border d-flex shadow p-3 m-5">
    <div class="row g-3">
        <div class="col-12">
            <label for="inputState" class="form-label">Data Pemesan Lapangan</label>
        </div>
        <table id="tabel-mitra" class="table table-striped table-bordered display text-center" width="100%" cellspacing="0" >
            <thead style="background-color: #439a97">
                <tr>
                    <th class="text-center">Nama Pemesan</th>
                    <th class="text-center">Lapangan</th>
                    <th class="text-center">Tanggal</th>
                    {{-- <th class="text-center">Jam</th> --}}
                    <th class="text-center">Total Harga</th>
                    <th class="text-center">Status</th>
                    {{-- <th class="text-center">Bukti Transfer</th> --}}
                    <th class="text-center">Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){  
        var tabel_mitra = $('#tabel-mitra').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: "{{route('index-vendor')}}",
                type: 'GET',
            },
            columns: [
                {data: 'cust_name', name: 'cust_name'},
                {data: 'field', name: 'field'},
                {data: 'order_date', name: 'order_date'},
                // {data: 'hours', name: 'hours'},
                {data: 'price_sum', name: 'price_sum'},
                {data: 'confirmation', name: 'confirmation'},
                {data: 'action', name: 'action'}
            ],
            
            order: [
                [0, 'asc']
            ],
        });
    });
</script>

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
    @endpush
@endsection