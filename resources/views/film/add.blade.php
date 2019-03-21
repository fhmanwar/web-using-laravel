@extends('layouts.app')

@section('css')

@endsection

@section('content')
<form action="/film" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="nama">Judul</label><br>
    <input name="nama" type="text" class="" id="nama"  placeholder="Judul" required></br>
    </div>

    <div class="form-group">
    <label for="deskripsi">Deskripsi</label><br>
    <input name="deskripsi" type="text" class="" id="deskripsi"  placeholder="Deskripsi" required></br>
    </div>

    <div class="form-group">
    <label for="jurusan">Sinopsis</label><br>
    <input name="sinopsis" type="text" class="" id="jurusan"  placeholder="Sinopsis" required></br>
    </div>
    
    
    <div class="form-group">
    <label for="poster">Poster</label><br>
    <input name="poster" type="text" class="" id="poster"  placeholder="Link Poster" required></br>
    </div>  

    <div class="form-group">
    <label for="tanggal">Tanggal</label><br>
    <input name="tanggal" type="date" class="" id="tanggal"  placeholder="Tanggal Rilis" required></br>
    </div>  
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

@section('js')

@endsection