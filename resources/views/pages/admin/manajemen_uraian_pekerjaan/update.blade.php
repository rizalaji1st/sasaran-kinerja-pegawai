@extends('layouts.adminLTE')
@section('title','Update Uraian Pekerjaan')
@section('manajemenUraianPekerjaanActive', 'menu-open')
@section('content-header', 'Update Uraian Pekerjaan')
@section('route-first','Admin')
@section('route-second','Update Uraian Pekerjaan')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Update Uraian Pekerjaan</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-uraian-pekerjaan/update/'.$uraian_pekerjaan->id.'/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="uraian" class="form-label">Uraian</label>
                        <input type="text" name="uraian" class="form-control" id="uraian" value="{{$uraian_pekerjaan->uraian}}">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$uraian_pekerjaan->keterangan}}">
                    </div>
                    <div class="mb-3">
                        <label for="poin" class="form-label">Poin</label>
                        <input type="text" name="poin" class="form-control" id="poin" value="{{$uraian_pekerjaan->poin}}">
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" name="satuan" class="form-control" id="satuan" value="{{$uraian_pekerjaan->satuan}}">
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Apakah Aktif</label>
                        <select name="active" id="active" class="form-control" value="{{$uraian_pekerjaan->active}}">
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