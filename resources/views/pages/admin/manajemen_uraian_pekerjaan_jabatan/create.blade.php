@extends('layouts.adminLTE')
@section('title','Tambah Uraian Pekerjaan Jabatan')
@section('manajemenUraianPekerjaanJabatanActive', 'menu-open')
@section('content-header', 'Tambah Uraian Pekerjaan Jabatan '.$jabatan->nama)
@section('route-first','Admin')
@section('route-second','Tambah Uraian Pekerjaan Jabatan')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Tambah Uraian Pekerjaan Jabatan</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-uraian-pekerjaan-jabatan/create/'.$jabatan->id.'/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="uraian_pekerjaan" class="form-label">Uraian Pekerjaan</label>
                        <select name="uraian_pekerjaan" id="uraian_pekerjaan" class="form-control">
                            <option value="">-- Pilih Uraian Pekerjaan --</option>
                            @foreach ($uraian_pekerjaans as $uraian_pekerjaan)
                                <option value="{{$uraian_pekerjaan->id}}">{{$uraian_pekerjaan->uraian}}</option>
                            @endforeach
                            <option value="-1">--Tidak ada--</option>
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