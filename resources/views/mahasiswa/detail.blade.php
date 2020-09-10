@extends('layout/main')

@section('title','Mahasiswa')

@section('container')
<div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Detail Data Mahasiswa</h1>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$mahasiswa->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswa->nim}}</h6>
            <p class="card-text">{{$mahasiswa->email}}</p>
            <p class="card-text">{{$mahasiswa->jurusan}}</p>

          <a href="{{$mahasiswa->id}}/edit" class="btn btn-primary">Edit</a>

          <form action="{{$mahasiswa->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
            <a href="/mahasiswa" class="card-link">Kembali</a>
        </div>
        </div>

</div>
@endsection