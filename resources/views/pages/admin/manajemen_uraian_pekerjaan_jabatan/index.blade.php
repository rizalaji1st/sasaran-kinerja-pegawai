@extends('layouts.adminLTE')
@section('title','Manajemen Uraian Pekerjaan Jabatan')
@section('manajemenUraianPekerjaanJabatanActive', 'menu-open')
@section('content-header', 'Manajemen Uraian Pekerjaan Jabatan')
@section('route-first','Admin')
@section('route-second','Manajemen Uraian Pekerjaan Jabatan')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-uraian-pekerjaan-jabatan/create')}}" >Tambah Uraian Pekerjaan Jabatan</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Uraian Pekerjaan</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($ref_jabatans as $ref_jabatan)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$ref_jabatan->nama}}</th>
                    <th>
                        <ol>
                        @foreach ($ref_jabatan->uraian_pekerjaan as $uraian_pekerjaan)
                            <li> {{ $uraian_pekerjaan->uraian }} </li>
                        @endforeach
                        </ol>
                    </th>
                    <th>
                            <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-uraian-pekerjaan-jabatan/update/'.$uraian_pekerjaan->id)}}">Edit</a>
                            <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$uraian_pekerjaan->id}}')">Delete</button> 
                            <form method="POST" action="{{url('/admin/manajemen-uraian-pekerjaan/delete/'.$uraian_pekerjaan->id)}}" id="delete{{$uraian_pekerjaan->id}}">
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

        function sweetDelete(uraian_pekerjaan, ref_jabatan){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+uraian_pekerjaan + ref_jabatan).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection