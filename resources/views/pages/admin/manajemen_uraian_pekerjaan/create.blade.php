@extends('layouts.adminLTE')
@section('title','Tambah Uraian Pekerjaan')
@section('manajemenUraianPekerjaanActive', 'menu-open')
@section('content-header', 'Tambah Uraian Pekerjaan')
@section('route-first','Admin')
@section('route-second','Tambah Uraian Pekerjaan')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Tambah Uraian Pekerjaan</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-uraian-pekerjaan/create/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="uraian" class="form-label">Uraian</label>
                        <input type="text" name="uraian" class="form-control" id="uraian">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                    </div>
                    <div class="mb-3">
                        <label for="poin" class="form-label">Poin</label>
                        <input type="text" name="poin" class="form-control" id="poin">
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" name="satuan" class="form-control" id="satuan">
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