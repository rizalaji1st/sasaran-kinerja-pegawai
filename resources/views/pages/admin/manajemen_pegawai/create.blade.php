@extends('layouts.adminLTE')
@section('title','Tambah Data Pegawai')
@section('manajemenPegawaiActive', 'menu-open')
@section('content-header', 'Tambah Data Pegawai')
@section('route-first','Admin')
@section('route-second','Tambah Data Pegawai')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Tambah Data Pegawai</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-pegawai/create/'.$user->id.'/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" id="name" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" id="email" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="kode-pegawai" class="form-label">Kode Pegawai</label>
                        <input type="text" name="kode-pegawai" class="form-control" id="kode-pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <select name="unit" id="unit" class="form-control">
                            <option value="">-- Pilih Ref Unit --</option>
                            @foreach ($refUnit as $unit)
                                <option value="{{$unit->id}}">{{$unit->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select name="jabatan" id="unit" class="form-control">
                            <option value="">-- Pilih Ref Jabatan --</option>
                            @foreach ($refJabatan as $jabatan)
                                <option value="{{$jabatan->id}}">{{$jabatan->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Apakah Aktif</label>
                        <select name="active" id="active" class="form-control">
                            <option value="1" selected>Ya</option>
                            <option value="0">Tidak</option>
                        </select>
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