@extends('layout/main')

@section('title', 'Form Tambah data Students')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="mt-3">Form Tambah data Students</h3>
                
                <form method="POST" action ="/students">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama">
                      <div class="invalid-feedback">
                        Masukkan Nama
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nrp">nrp</label>
                      <input type="text" class="form-control" id="nrp" placeholder="Masukkan nrp" name="nrp">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
                      </div>
                    
                      <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </form>

            </div>
        </div>
    </div>
@endsection
