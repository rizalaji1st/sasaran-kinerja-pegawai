@extends('layouts.adminLTE')
@section('title','Manajemen Realisasi SKP')
@section('manajemenTargetRealisasiSkpActive', 'menu-open')
@section('content-header', 'Tambah Realisasi '.$skp_realisasi->skp_target->uraian_pekerjaan_jabatan->jabatan->nama.' '. $skp_realisasi->skp_target->uraian_pekerjaan_jabatan->uraian_pekerjaan->uraian)
@section('route-first','Pegawai')
@section('route-second','Tambah Realisasi SKP')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/pegawai/manajemen-realisasi-skp/'.$skp_realisasi->id.'/update/store')}}" autocomplete="off" enctype="multipart/form-data" >
                @csrf
                    <div class="mb-3">
                        <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                        <input type="date" name="tanggal_awal" class="form-control" id="tanggal_awal" value="{{Carbon\Carbon::parse($skp_realisasi->tanggal_awal)->format('Y-m-d')}}">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" value="{{Carbon\Carbon::parse($skp_realisasi->tanggal_akhir)->format('Y-m-d')}}">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="lokasi" value="{{$skp_realisasi->lokasi}}">
                    </div>
                    <div class="mb-3">
                        <label for="jml_realisasi" class="form-label">Jumlah Realisasi</label>
                        <input type="text" name="jml_realisasi" class="form-control" id="jml_realisasi" value="{{$skp_realisasi->jml_realisasi}}">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$skp_realisasi->keterangan}}">
                    </div>
                    <div class="mb-3">
                        <label for="bukti" class="form-label">Bukti</label>
                        <input type="file" name="bukti" class="form-control" id="bukti" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        function sweetDelete(user){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+user).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection