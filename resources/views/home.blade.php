@extends('layouts.adminLTE')
@section('title','Beranda pegawai')
@section('content-header', 'Beranda pegawai')
@section('route-first','Pegawai')
@section('route-second','Beranda')
@section('berandaActive','menu-open')
@section('content')
<!-- Default box -->
<div class="row">
    <div class="col-md-4">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title"><b>SKP</b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                Penilaian SKP dengan membandingkan realisasi kerja dengan target dari aspek kuantitas, kualitas, waktu dan/atau biaya.
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title"><b>PERILAKU KERJA</b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                Penilaian perilaku kerja dilakukan dengan cara pengamatan sesuai dengan kriteria yang telah ditetapkan.
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-warning">
            <div class="card-header">
                <h3 class="card-title"><b>PRESTASI KERJA</b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                Penilaian prestasi kerja dilakukan dengan cara menggabungkan 60% Penilaian SKP dan 40% Penilaian Perilaku Kerja
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- /.col -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>UNSUR - UNSUR SKP</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content mb-4">
                    <span class="info-box-text"><b>Kegiatan Tugas Jabatan</b></span>
                    <span class="info-box-number">
                        <small>
                            <ol type="a">
                                <li>Tingkat Eselon</li>
                                <li>Tingkat Staf/Pelaksana</li>
                            </ol>
                        </small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-12">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mail-bulk"></i></span>

                <div class="info-box-content mb-3">
                    <span class="info-box-text"><b>Angka Kredit</b></span>
                    <p class="info-box-number"><small>Satuan nilai kegiatan yang harus dicapai bagi yang memiliki Jabatan Fungsional Tertentu</small></p>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-md-4 col-sm-6">
            <div class="info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bullseye"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><b>Target</b></span>
                    <span class="info-box-number">
                        <small>
                            <ol type="a">
                                <li>Aspek Kuantitas</li>
                                <li>Aspek Kualitas</li>
                                <li>Aspek Waktu</li>
                            </ol>
                        </small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
</div>
</div>

@endsection