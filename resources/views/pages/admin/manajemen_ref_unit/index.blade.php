@extends('layouts.adminLTE')
@section('title','Manajemen Ref Unit')
@section('manajemenRefUnitActive', 'menu-open')
@section('content-header', 'Manajemen Ref Unit')
@section('route-first','Admin')
@section('route-second','Manajemen Ref Unit')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-ref-unit/create')}}" >Tambah Ref Unit</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Induk Lembaga</th>
                <th scope="col">Level</th>
                <th scope="col">isActive</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ref_units as $ref_unit)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$ref_unit->nama}}</th>
                    <th>{{$ref_unit->unit_parent ? $ref_unit->unit_parent->nama : ''}}</th>
                    <th>@if ($ref_unit->level == 1)
                            Universitas
                        @elseif ($ref_unit->level == 2)
                            Fakultas / Lembaga Unit
                        @elseif ($ref_unit->level == 3)
                            Prodi
                        @endif
                    </th>
                    <th>
                        <span class="lead">
                            @if ($ref_unit->is_active)
                                <span class="badge badge-success">Ya</span>
                            @else
                                <span class="badge badge-danger">Tidak</span>
                            @endif
                        </span>
                    </th>
                    
                    <th>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-ref-unit/update/'.$ref_unit->id)}}">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$ref_unit->id}}')">Delete</button> 
                        <form method="POST" action="{{url('/admin/manajemen-ref-unit/delete/'.$ref_unit->id)}}" id="delete{{$ref_unit->id}}">
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

        function sweetDelete(ref_unit){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+ref_unit).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection