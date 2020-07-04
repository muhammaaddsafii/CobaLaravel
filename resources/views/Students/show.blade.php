@extends('layout/main')

@section('title', 'Detail Students')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-3">Detail Students</h3>
                <div class="card" style="">
                    <div class="card-body">
                      <h5 class="card-title">{{$student->nama}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                      <p class="card-text">{{$student->email}}</p>
                      <p class="card-text">{{$student->jurusan}}</p>
                      <button type="submit" class="btn btn-primary">Edit</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                      <a href="/students" class="card-link">Kembali</a>
                    </div>
                  </div>

            </div>
        </div>
    </div>
@endsection
