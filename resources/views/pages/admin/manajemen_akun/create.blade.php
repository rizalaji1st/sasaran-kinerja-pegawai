@extends('layouts.admin')
@section('title','Tambah Akun')
@section('manajemenAkunActive', 'menu-open')
@section('content-header', 'Tambah Akun')
@section('route-first','Admin')
@section('route-second','Tambah Akun')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Tambah Akun</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-akun/create/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" name="roles[]" type="checkbox" value="{{$role->id}}" id="{{$role->nama}}">
                                <label class="form-check-label" for="{{$role->name}}">{{$role->nama}}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection