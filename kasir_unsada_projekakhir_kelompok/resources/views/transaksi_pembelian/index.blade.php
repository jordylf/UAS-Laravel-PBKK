@extends('layouts.master')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
@endpush
@section('judul')
Kasir Unsada | Project Akhir
@endsection
@section('judul_sub')
Data Transaksi Pembelian
@endsection
@section('content')
<div class="h2 mb-3 text-center">Total Akhir Transaksi Pembelian Barang</div>

<hr style="width:75%">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Total Akhir Transaksi Pembelian</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor Daftar Transaksi Barang</th>
                        <th>Total Harga Akhir dari daftar Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor Daftar Transaksi Barang</th>
                        <th>Total Harga Akhir dari daftar Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tpembelian as $item => $key)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $key->total_harga  }}</td>
                        <td>
                            <a href="/transaksi-pembelian/{{$key->id}}" class="btn btn-outline-info"><i
                                    class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function () {
    $("#example1").DataTable();
  });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
@endpush
@endsection
