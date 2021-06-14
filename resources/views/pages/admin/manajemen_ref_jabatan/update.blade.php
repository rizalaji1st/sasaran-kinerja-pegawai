@extends('layouts.adminLTE')
@section('title','Manajemen Ref Jabatan')
@section('manajemenRefJabatanActive', 'menu-open')
@section('content-header', 'Manajemen Ref Jabatan')
@section('route-first','Admin')
@section('route-second','Manajemen Ref Jabatan')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <h3>Update Ref Jabatan</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-ref-jabatan/update/' .$ref_jabatan->id. '/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" value="{{$ref_jabatan->nama}}" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" value="{{$ref_jabatan->keterangan}}" class="form-control" id="keterangan">
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Apakah Aktif</label>
                        <select name="active" id="active" class="form-control" value="{{$ref_jabatan->active}}">
                            <option value="1">Ya</option>
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

        function sweetDelete(ref_jabatan){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+ref_jabatan).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection