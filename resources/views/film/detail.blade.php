@extends('layouts.app')

@section('css')

@endsection
@section('content')
<?php
        $films = \App\Film::get();
        $i = 0;
    ?>
<form action="/film/{{$films[$i]->id}}">
        <div align="center">
        <img class="" src="{{$films[$i]->poster}}" width="200px">
        </div>
        <h2 class="card-title">
                <td>
                  <?php echo $films[$i]->nama;?>
                </td>
        </h2>
        <p class="card-text" src="{{$films[$i]->deskripsi}}" >
                <td>
                  <?php echo $films[$i]->deskripsi;?>
                </td>
        </p>
        <p class="card-text" src="{{$films[$i]->deskripsi}}" >
        <h5 class="card-title">
                <td>
                  Sinopsis
                </td>
        </h5>
                <td>Sinopsis
                  <?php echo $films[$i]->sinopsis;?>
                </td>
        </p>
        <p class="card-text" src="{{$films[$i]->deskripsi}}" >
                <td>
                <h6 class="card-title">
                <td>
                  Tanggal Rilis :<?php echo $films[$i]->tanggal;?>
                </td>
                </h6    
                </td>
        </p>
      
      </form>
@endsection

@section('js')
<script>
</script>
@endsection