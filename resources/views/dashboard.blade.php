@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div align="center">
<tr><a href = "/film/add">
    <button class="btn btn-primary" >Add Film</button>
</a></tr>
<?php
            $films = \App\Film::get();
            $i = 0;
?>
<a href="{{action('FilmController@downloadPDF', $films[$i]->id)}}">
    <button class="btn btn-primary" >Laporan Film</button>
</a>
<a href = "/logout" align="left">
    <button class="btn btn-danger" >Log Out</button>
</a>
</div>

<table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Poster</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $films = \App\Film::get();
            $no = 1;
        ?>

        @for($i = 0; $i<sizeof($films); $i++)
        <tr>
                <th scope="row">{{$no}}</th>
                <td>
                    <a href="/film/{{$films[$i]->id}}">
                        {{$films[$i]->nama}}
                    </a>
                </td>

                
                <td>
                
                {{$films[$i]->deskripsi}}
                
                </td>
                <td>
                    {{$films[$i]->sinopsis}}
                    
                </td>
                <td>
                    <img height="100" src="{{$films[$i]->poster}}" />
                </td>
                <td>{{$films[$i]->tanggal}}</td>
                <td>
                    <a href="/film/{{$films[$i]->id}}/edit">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>   
                    <a href="/film/{{$films[$i]->id}}/delete">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>        
                </td>
               
            </tr>
<?php
   $no++;
?>

        @endfor
    </tbody>
</table>
@endsection

@section('js')

@endsection