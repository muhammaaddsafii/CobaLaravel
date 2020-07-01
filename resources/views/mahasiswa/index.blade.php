@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-3">Daftar Mahasiswa</h3>

                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NRP</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($mahasiswa as $mhs)
                        <tr>
                        <th scope="row">{{$mhs -> id}}</th>
                        <td>{{$mhs -> nama}}</td>
                        <td>{{$mhs -> nrp}}</td>
                        <td>{{$mhs -> email}}</td>
                        <td>{{$mhs -> jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>

            </div>
        </div>
    </div>
@endsection
