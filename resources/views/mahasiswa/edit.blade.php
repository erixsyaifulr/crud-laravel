@extends('layout/main')

@section('title','Mahasiswa')

@section('container')
<div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Ubah Data Mahasiswa</h1>

          <form method="post" action="/mahasiswa/{{$mahasiswa->id}}">
          @method('put')
          <!-- buat token -->
          @csrf 
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" value ="{{$mahasiswa->nama}}" id="nama" placeholder="Masukkan nama" name="nama">
                @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
           
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" value ="{{$mahasiswa->nim}}" id="nim" placeholder="Masukkan nim" name="nim">
                @error('nim')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
           
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" value ="{{$mahasiswa->email}}" id="email" placeholder="Masukkan email" name="email">
                @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
           
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" value ="{{$mahasiswa->jurusan}}" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
                @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
           <button type="submit" class="btn btn-primary">Ubah</button>
        </form>

        </div>
      </div>
</div>
@endsection