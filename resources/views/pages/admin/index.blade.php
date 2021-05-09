@extends('layouts.admin')
@section('title','Beranda admin')
@section('content-header', 'Beranda admin')
@section('route-first','Admin')
@section('route-second','Beranda')
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hooray</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          adminLTE udah include gais, selamat lanjut ngoding
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          ini cuma Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
@endsection