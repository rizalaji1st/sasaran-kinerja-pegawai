@extends('layouts.adminLTE')
@section('title','Manajemen Target & Realisasi SKP')
@section('manajemenTargetRealisasiSkpActive', 'menu-open')
@section('content-header', 'Manajemen Target & Realisasi SKP periode '.$periode->nama)
@section('route-first','Pegawai')
@section('route-second','Manajemen Target & Realisasi SKP')
@section('content')
<!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Tambah Target SKP</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/pegawai/manajemen-target-realisasi-skp/target/create/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="pegawai" class="form-label">Pegawai</label>
                        <select name="pegawai" id="pegawai" class="form-control">
                            <option value="">-- Pilih Pegawai --</option>
                            @foreach ($pegawais as $pegawai)
                                <option value="{{$pegawai->id}}">{{$pegawai->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="uraian_pekerjaan_jabatan" class="form-label">Pilih Uraian Pekerjaan Jabatan</label>
                        <select name="uraian_pekerjaan_jabatan" id="uraian_pekerjaan_jabatan" class="form-control">
                            <option value="">-- Pilih Uraian Pekerjaan Jabatan --</option>
                            @foreach ($refJabatan as $jabatan)
                                @foreach ($jabatan->uraian_pekerjaans as $uraian_pekerjaan)
                                    <option value="{{$uraian_pekerjaan->pivot->id}}">{{$jabatan->nama}} | {{$uraian_pekerjaan->uraian}}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jml_target" class="form-label">Jumlah Target</label>
                        <input type="text" name="jml_target" class="form-control" id="jml_target">
                    </div>
                    <input type="hidden" name="periode" value="{{$periode->id}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jabatan | Uraian Pekerjaan</th>
                <th scope="col">Jumlah Target</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($skp_targets as $skp_target)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$skp_target->pegawai->nama}}</th>
                    <th>{{$skp_target->uraian_pekerjaan_jabatan->jabatan->nama}} | {{$skp_target->uraian_pekerjaan_jabatan->uraian_pekerjaan->uraian}}</th>
                    <th>{{$skp_target->jml_target}} {{$skp_target->uraian_pekerjaan_jabatan->uraian_pekerjaan->satuan}}</th>
                    <th>
                        <a href="{{url('pegawai/manajemen-realisasi-skp/'.$skp_target->id)}}" class="btn btn-primary btn-sm">Realisasi</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$skp_target->id}}')">Delete</button> 
                            <form method="POST" action="{{url('/pegawai/manajemen-target-realisasi-skp/delete/'.$skp_target->id)}}" id="delete{{$skp_target->id}}">
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