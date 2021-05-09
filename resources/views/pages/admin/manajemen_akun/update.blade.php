@extends('layouts.admin')
@section('title','Update Akun')
@section('manajemenAkunActive', 'menu-open')
@section('content-header', 'Update Akun')
@section('route-first','Admin')
@section('route-second','Update Akun')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Update Akun</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-akun/update/'.$user->id.'/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
                    </div>
                    <div class="mb-3">
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" name="roles[]" type="checkbox" value="{{$role->id}}" id="{{$role->nama}}"
                                @foreach ($user->roles as $uRole)
                                    @if ($role->id == $uRole->id)
                                        checked
                                    @endif
                                @endforeach
                                >
                                <label class="form-check-label" for="{{$role->name}}">{{$role->nama}}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection