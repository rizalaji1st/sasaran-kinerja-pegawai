@extends('layouts.admin')
@section('title','Manajemen Akun')
@section('manajemenAkunActive', 'menu-open')
@section('content-header', 'Manajemen Akun')
@section('route-first','Admin')
@section('route-second','Manajemen Akun')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-akun/create')}}" >Tambah Akun</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                        @foreach ($user->roles as $role)
                            {{$role->nama}} 
                        @endforeach
                    </th>
                    <th>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-akun/update/'.$user->id)}}">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$user->id}}')">Delete</button> 
                        <form method="POST" action="{{url('/admin/manajemen-akun/delete/'.$user->id)}}" id="delete{{$user->id}}">
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