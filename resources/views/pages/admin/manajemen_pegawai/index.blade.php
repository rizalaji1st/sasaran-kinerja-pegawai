@extends('layouts.adminLTE')
@section('title','Manajemen Pegawai')
@section('manajemenPegawaiActive', 'menu-open')
@section('content-header', 'Manajemen Pegawai')
@section('route-first','Admin')
@section('route-second','Manajemen Pegawai')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Punya Role Pegawai</th>
                <th scope="col">Manage Data Pegawai</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                        <span class="lead">
                        @if ($user->hasRole('pegawai'))
                            <span class="badge badge-success">Ya</span>
                        @else
                            <span class="badge badge-danger">Tidak</span>
                        @endif
                        </span>
                    </th>
                    <th>
                        @if ($user->pegawai)
                            <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-pegawai/update/'.$user->pegawai->id)}}">Edit</a>
                            <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$user->id}}')">Delete</button> 
                            <form method="POST" action="{{url('/admin/manajemen-akun/delete/'.$user->id)}}" id="delete{{$user->id}}">
                                @csrf
                            </form>
                        @else
                            <a class="btn btn-sm btn-success" href="{{url('admin/manajemen-pegawai/create/'.$user->id)}}">Buat</a>
                        @endif
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