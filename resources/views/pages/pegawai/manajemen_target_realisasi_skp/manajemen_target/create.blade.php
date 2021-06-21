@extends('layouts.adminLTE')
@section('title','Manajemen Target & Realisasi SKP')
@section('manajemenTargetRealisasiSkpActive', 'menu-open')
@section('content-header', 'Manajemen Target & Realisasi SKP')
@section('route-first','Pegawai')
@section('route-second','Manajemen Target & Realisasi SKP')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <h3>Pilih Periode</h3>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Awal</th>
                <th scope="col">Tanggal Akhir</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($periodes as $periode)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$periode->nama}}</th>
                    <th>{{Carbon\Carbon::parse($periode->tanggal_awal)->isoFormat('D MMMM Y')}}</th>
                    <th>{{Carbon\Carbon::parse($periode->tanggal_akhir)->isoFormat('D MMMM Y')}}</th>
                    <th>
                        <a href="{{url('pegawai/manajemen-target-realisasi-skp/periode/'.$periode->id)}}" class="btn btn-primary btn-sm">Lihat</a>
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