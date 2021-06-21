@extends('layouts.adminLTE')
@section('title','Manajemen Realisasi SKP')
@section('manajemenTargetRealisasiSkpActive', 'menu-open')
@section('content-header', 'Manajemen Realisasi '.$skp_target->uraian_pekerjaan_jabatan->jabatan->nama.' '. $skp_target->uraian_pekerjaan_jabatan->uraian_pekerjaan->uraian)
@section('route-first','Pegawai')
@section('route-second','Manajemen Target & Realisasi SKP')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4 table-responsive">
        <div>
            <a href="{{url('/pegawai/manajemen-realisasi-skp/'.$skp_target->id.'/create')}}" class="btn btn-success">Tambah Realisasi</a>
            <hr>
        </div>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jml Target</th>
                <th scope="col">Tanggal Awal</th>
                <th scope="col">Tanggal Akhir</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Jumlah Realisasi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Bukti</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($skp_realisasis as $realisasi)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$skp_target->jml_target}} {{$skp_target->uraian_pekerjaan_jabatan->uraian_pekerjaan->satuan}}</th>
                    <th>{{Carbon\Carbon::parse($realisasi->tanggal_awal)->isoFormat('D MMMM Y')}}</th>
                    <th>{{Carbon\Carbon::parse($realisasi->tanggal_akhir)->isoFormat('D MMMM Y')}}</th>
                    <th>{{$realisasi->lokasi}}</th>
                    <th>{{$realisasi->jml_realisasi}} {{$skp_target->uraian_pekerjaan_jabatan->uraian_pekerjaan->satuan}}</th>
                    <th>{{$realisasi->keterangan}}</th>
                    <th>
                        <a class="btn btn-primary btn-sm" href="{{url('/pegawai/manajemen-realisasi-skp/'.$realisasi->id.'/bukti')}}">
                            Unduh file
                        </a>
                    </th>
                    <th>
                        <a href="{{url('/pegawai/manajemen-realisasi-skp/'.$realisasi->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$realisasi->id}}')">Delete</button> 
                        <form method="POST" action="{{url('/pegawai/manajemen-realisasi-skp/'.$realisasi->id.'/delete')}}" id="delete{{$realisasi->id}}">
                            @csrf
                        </form>
                    </th>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        function sweetDelete(realisasi){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+realisasi).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection