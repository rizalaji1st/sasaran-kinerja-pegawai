@extends('layouts.adminLTE')
@section('title','Manajemen Uraian Pekerjaan Jabatan')
@section('manajemenUraianPekerjaanJabatanActive', 'menu-open')
@section('content-header', 'Manajemen Uraian Pekerjaan Jabatan')
@section('route-first','Admin')
@section('route-second','Manajemen Uraian Pekerjaan Jabatan')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($ref_jabatans as $ref_jabatan)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$ref_jabatan->nama}}</th>
                    <th>
                       <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-uraian-pekerjaan-jabatan/'.$ref_jabatan->id)}}">Edit
                       </a>
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

        function sweetDelete(uraian_pekerjaans){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete" + uraian_pekerjaans).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection