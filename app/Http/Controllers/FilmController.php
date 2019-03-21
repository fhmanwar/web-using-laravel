<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use PDF;
class FilmController extends Controller
{
    //
    function index(){
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        return view('film.index');
    }
    function detail($id){
        return view('film.detail');
    }
    function add(){
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        return view('film.add');
    }
    function create(Request $request){
        // dd($request);
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        $nama = $request->nama;
        $sinopsis = $request->sinopsis;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $tanggal = $request->tanggal;
        if($nama == null){
            return 'nama kosong, mohon diisi';
        }
        $film = new \App\Film;
        $film->nama = $nama;
        $film->sinopsis = $sinopsis;
        $film->deskripsi =  $deskripsi;
        $film->poster = $poster;
        $film->tanggal = $tanggal;
        $film->save();
        return redirect('film');
    }
    function edit($id){
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        $film = \App\Film::find($id);
        return view('film.edit')->with('film',$film);
    }
    function update(Request $request,$id){
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        $nama = $request->nama;
        $sinopsis = $request->sinopsis;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $tanggal = $request->tanggal;
        if($nama == null){
            return 'nama kosong, mohon diisi';
        }
        $film = \App\Film::find($id);
        $film->nama = $nama;
        $film->sinopsis = $sinopsis;
        $film->deskripsi =  $deskripsi;
        $film->poster = $poster;
        $film->tanggal = $tanggal;
        $film->save();
        return redirect('film');
    }
    function delete($id){
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        $film = \App\Film::find($id);
        return view('film.delete')->with('film',$film);
    }
    function confirmDelete($id){
        if(Auth::user()->role != 'admin'){
            return 'maaf anda ga boleh masuk';
        }
        $film = \App\Film::find($id);
        $film->delete();
        return redirect('film');
    }
    public function downloadPDF($id){
        $film = \App\FIlm::find($id);
  
        $pdf = PDF::loadView('register', compact('user'));
        return $pdf->download('film.pdf');
  
      }
}
