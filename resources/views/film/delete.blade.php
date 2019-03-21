@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">apakah anda ingin menghapus Film "{{$film->nama}}"?</h1>
  <p class="lead">
  
    <a class="btn btn-danger btn-lg" href="/film/{{$film->id}}/confirmDelete" role="button">Ya</a>
    <a class="btn btn-primary btn-lg" href="/film" role="button">Tidak</a>
  </p>
</div>

@endsection