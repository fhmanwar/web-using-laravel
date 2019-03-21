<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
        $films = \App\Film::get();
        
    ?>
    <table class="table table-bordered">
    @for($i = 0; $i<sizeof($films); $i++)
    <tr>
        <td>
            <div align="center">
                <h2>LAPORAN FILM</h2>
            </div>
        </td>
      </tr>
      <tr>
        <td><div align="center">
          <img class="card-img-top" src="{{$films[$i]->poster}}" alt="Card image cap">
        </div></td>
      </tr>
      <br></br>
      <tr>
        <td>
            <div align="center">
                <h4>{{$films[$i]->nama}}</h4>
            </div>
        </td>
      </tr>
      <br></br>
      <tr>
        <td>
            <h4>Deskripsi</h4>  {{$films[$i]->deskripsi}}
        </td>
      </tr>
      <br></br>
      <tr>
        <td>
            <h4>Sinopsis</h4>  {{$films[$i]->sinopsis}}
        </td>
      </tr>
      <br></br>
      <tr>
        <td>
            <h4>Tangal Rilis</h4>   {{$films[$i]->tanggal}}
        </td>
      </tr>
      

        @endfor
    </table>
  </body>
</html>