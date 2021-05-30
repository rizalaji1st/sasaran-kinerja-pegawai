@extends('layouts.adminLTE')
@section('title','Manajemen Uraian Pekerjaan')
@section('manajemenUraianPekerjaanActive', 'menu-open')
@section('content-header', 'Manajemen Uraian Pekerjaan')
@section('route-first','Admin')
@section('route-second','Manajemen Uraian Pekerjaan')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-uraian-pekerjaan/create')}}" >Tambah Uraian</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Uraian</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Poin</th>
                <th scope="col">Satuan</th>
                <th scope="col">Apakah Aktif</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($uraian_pekerjaans as $uraian_pekerjaan)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$uraian_pekerjaan->uraian}}</th>
                    <th>{{$uraian_pekerjaan->keterangan}}</th>
                    <th>{{$uraian_pekerjaan->poin}}</th>
                    <th>{{$uraian_pekerjaan->satuan}}</th>

                    <th>
                        <span class="lead">
                        @if ($uraian_pekerjaan->is_active)
                            <span class="badge badge-success">Ya</span>
                        @else
                            <span class="badge badge-danger">Tidak</span>
                        @endif
                        </span>
                    </th>
                    <th>
                            <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-uraian-pekerjaan/update/'.$uraian_pekerjaan->id)}}">Edit</a>
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

        function sweetDelete(uraian_pekerjaan){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+uraian_pekerjaan).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection