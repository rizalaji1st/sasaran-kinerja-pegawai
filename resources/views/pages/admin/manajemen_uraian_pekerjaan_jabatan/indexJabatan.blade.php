@extends('layouts.adminLTE')
@section('title','Manajemen Uraian Pekerjaan Jabatan')
@section('manajemenUraianPekerjaanJabatanActive', 'menu-open')
@section('content-header', 'Manajemen Uraian Pekerjaan Jabatan')
@section('route-first','Admin')
@section('route-second','Manajemen Uraian Pekerjaan Jabatan')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h5>Tambah Uraian Pekerjaan</h5>
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
    <div class="container-fluid card p-4">
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Uraian Pekerjaan</th>
                <th scope="col">Is Active</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($jabatan->uraian_pekerjaans as $uraian_pekerjaan)
                @php
                    $uraian_pekerjaan_jabatan = App\Models\UraianPekerjaanJabatan::where([['id_jabatan', $jabatan->id], ['id_uraian_pekerjaan', $uraian_pekerjaan->id]])->first();
                @endphp
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$uraian_pekerjaan->uraian}}</th>
                    <th>
                        <span class="lead">
                            @if ($uraian_pekerjaan_jabatan->is_active)
                                <span class="badge badge-success">Ya</span>
                            @else
                                <span class="badge badge-danger">Tidak</span>
                            @endif
                        </span>
                    </th>
                    <th>
                       @if ($uraian_pekerjaan_jabatan->is_active)
                       <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$uraian_pekerjaan->pivot->id}}')">Nonaktifkan</button> 
                            <form method="POST" action="{{url('/admin/manajemen-uraian-pekerjaan-jabatan/delete/'.$uraian_pekerjaan->pivot->id)}}" id="delete{{$uraian_pekerjaan->pivot->id}}">
                                @csrf
                            </form>
                        @else
                        <button class="btn btn-sm btn-success" onclick="sweetDelete('{{$uraian_pekerjaan->pivot->id}}')">Aktifkan</button> 
                             <form method="POST" action="{{url('/admin/manajemen-uraian-pekerjaan-jabatan/undelete/'.$uraian_pekerjaan->pivot->id)}}" id="delete{{$uraian_pekerjaan->pivot->id}}">
                                 @csrf
                             </form>
                        @endif
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

        function sweetDelete(uraian_pekerjaan_jabatan){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete" + uraian_pekerjaan_jabatan).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection