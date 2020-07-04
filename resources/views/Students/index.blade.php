@extends('layout/main')

@section('title', 'List Students')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-3">List Students</h3>

                    <a href="/Students/create" class="btn btn-primary my-3">Tambah Data</a>

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <ul class="list-group">
                    @foreach($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$student->nama}}
                    <a href="Students/{{$student-> id}}" class="badge badge-info">Detail</a>
                    </li>
                    </ul>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
