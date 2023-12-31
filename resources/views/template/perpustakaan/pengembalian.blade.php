@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/anggota/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" name="tanggal_pengembalian" placeholder="Input Tanggal Pengembalian">
                    <label for="exampleInputEmail1">Denda</label>
                    <input type="number" class="form-control" name="denda" placeholder="Input Denda">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" name="reset" value="Save" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
@endsection