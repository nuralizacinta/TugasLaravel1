@extends('template.master')

@section('content')

<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Petugas</h3>
              </div>

              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
              <div class="card-body">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama" placeholder="Enter Nama">
                    @error('nama')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputJabatan1">Jabatan</label>
                    <input type="text"class="form-control @error('jabatan') is-invalid @enderror " name="jabatan" placeholder="Enter Jabatan">
                    @error('jabatan')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNoTelepon1">No Telepon</label>
                    <input type="number" class="form-control @error('telp') is-invalid @enderror "name="telp" placeholder="Enter No Telepon">
                    @error('telp')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Enter Alamat">
                    @error('alamat')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Kembali</a>
                </div>
              </form>
              </div>
</div>

             <div class="modal" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Hajimallago!!</h5>
                  </div>
                  <div class="modal-body">
                    <p>Yakin nih mau keluar dari form input Data Petugas?</p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <a href="{{ route('petugas.index') }}" class="btn btn-primary">Yes</a>
                  </div>
                </div>
              </div>
                </div>
              </form>
            </div>
</div>

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
@endsection