@extends('layouts.adminLTE')
@section('title','Update Pegawai')
@section('manajemenPegawaiActive', 'menu-open')
@section('content-header', 'Update Pegawai')
@section('route-first','Admin')
@section('route-second','Update Pegawai')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Update Akun</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-pegawai/update/'.$pegawai->id.'/store')}}" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$pegawai->nama}}" id="nama">
                </div>
                <div class="mb-3">
                    <label for="kode_pegawai" class="form-label">Kode Pegawai</label>
                    <input type="text" name="kode_pegawai" class="form-control" id="kode_pegawai" value="{{$pegawai->id}}">
                </div>
                <div class="mb-3">
                    <label for="unit" class="form-label">Unit</label>
                    <select name="unit" id="unit" class="form-control">
                        <option value="">-- Pilih Ref Unit --</option>
                        @foreach ($refUnit as $unit)
                            <option value="{{$unit->id}}" @if($unit->id == $pegawai->id_unit) selected @endif>{{$unit->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{$pegawai->alamat}}">
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <select name="jabatan" id="unit" class="form-control">
                        <option value="">-- Pilih Ref Jabatan --</option>
                        @foreach ($refJabatan as $jabatan)
                            <option value="{{$jabatan->id}}"  @if($jabatan->id == $pegawai->id_jabatan) selected @endif>{{$jabatan->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="active" class="form-label">Is Active</label>
                    <input type="number" name="active" class="form-control" id="active" value="{{$pegawai->is_active}}">
                </div>
                <input type="hidden" value="{{$pegawai->id_user}}" name="id_user">
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection