@extends('layout/main')

@section('title','Mahasiswa')

@section('container')
<div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Data Mahasiswa</h1>
          <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Data</a>

          @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
          @endif

          <table class="table">
            <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>

              <th scope="col">Nama</th>
            
              <th scope="col">Aksi</th>
              </thead>
            </tr>
            <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
              <td scope="row">{{$loop->iteration}}</td>

              <td>{{$mhs->nama}}</td>
            
              <td><a href="/mahasiswa/{{$mhs->id}}" class="badge badge-success">Detail</a></td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection