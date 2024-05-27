@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Kelas
        <small>SMK Negeri 1 Cianjur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Kelas</li>
        <li class="active">Tambah Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates.feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href=" {{ url('/') }} " class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
        </div>
        <div class="box-body">
            <form action="{{ url('kelas/add') }}" clas="form-horizontal" method="POST">
                {{ csrf_field() }}
             <div class="form-group">
                <label class="control-label col-sm-2">Nama Kelas</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_kelas" class ="form-control" placeholder="Masukan Nama Kelas" />
                </div>
            </div>
                
            <div class="form-group">
                <label class="control-label col-sm-2">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" name="jurusan" class ="form-control" placeholder="Masukan jurusan" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                </div>
            </div>
            </form>
          </div>
            <!--/.box-body -->
        </div>
            <!--/.box -->

        </section>
        <!-- /.content -->
@endsection