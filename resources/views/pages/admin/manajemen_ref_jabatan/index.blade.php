@extends('layouts.adminLTE')
@section('title','Manajemen Ref Jabatan')
@section('manajemenRefJabatanActive', 'menu-open')
@section('content-header', 'Manajemen Ref Jabatan')
@section('route-first','Admin')
@section('route-second','Manajemen Ref Jabatan')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-ref-jabatan/create')}}" >Tambah Ref Jabatan</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">isActive</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ref_jabatans as $ref_jabatan)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$ref_jabatan->nama}}</th>
                    <th>{{$ref_jabatan->keterangan}}</th>
                    <th>
                        <span class="lead">
                            @if ($ref_jabatan->is_active)
                                <span class="badge badge-success">Ya</span>
                            @else
                                <span class="badge badge-danger">Tidak</span>
                            @endif
                        </span>
                    </th>
                    
                    <th>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-ref-jabatan/update/'.$ref_jabatan->id)}}">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$ref_jabatan->id}}')">Delete</button> 
                        <form method="POST" action="{{url('/admin/manajemen-ref-jabatan/delete/'.$ref_jabatan->id)}}" id="delete{{$ref_jabatan->id}}">
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

        function sweetDelete(ref_jabatan){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+ref_jabatan).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection