@extends('layouts.app')

@section('css')

@endsection

@section('content')
<form action="/film/{{$film->id}}/edit" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="nama">Nama</label><br>
    <input name="nama" type="text" class="" id="nama"  placeholder="masukkan nama film" value="{{$film->nama}}" required></br>
    </div>

    
    <div class="form-group">
    <label for="deskripsi">Deskripsi</label><br>
    <input name="deskripsi" type="text" class="" id="deskripsi"  placeholder="masukkan deskripsii" value="{{$film->deskripsi}}" required></br>
    </div>
    
    <div class="form-group">
    <label for="jurusan">Sinopsis</label><br>
    <input name="sinopsis" type="text" class="" id="jurusan"  placeholder="masukkan sinopsis film" value="{{$film->sinopsis}}" required></br>
    </div>
    
    <div class="form-group">
    <label for="poster">poster</label><br>
    <input name="poster" type="text" class="" id="poster"  placeholder="masukkan poster" value="{{$film->poster}}" required></br>
    </div>  

    <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input name="tanggal" type="date" class="" id="tanggal"  placeholder="masukkan tanggal" value="{{$film->tanggal}}" required>
    </div>  
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

@section('js')

@endsection