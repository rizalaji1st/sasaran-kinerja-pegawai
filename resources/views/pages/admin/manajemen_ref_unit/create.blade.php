@extends('layouts.adminLTE')
@section('title','Manajemen Ref Unit')
@section('manajemenRefUnitActive', 'menu-open')
@section('content-header', 'Manajemen Ref Unit')
@section('route-first','Admin')
@section('route-second','Manajemen Ref Unit')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <h3>Tambah Ref Unit</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-ref-unit/create/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Apakah Aktif</label>
                        <select name="active" id="active" class="form-control">
                            <option value="1" selected>Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <select name="unit" id="unit" class="form-control">
                            <option value="">-- Pilih Ref Unit --</option>
                            @foreach ($ref_units as $ref_unit)
                                <option value="{{$ref_unit->id}}">{{$ref_unit->nama}}</option>
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