<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

       /// return $email . " " . $password;

       if (auth::attempt(['email' => $email, 'password' => $password])) {
        // Authentication passed...
        return redirect()->intended('dashboard');
      }else{
          return 'username atau password salah';
      }

    }
    function register(Request $request){
    //   dd($request);
    
    //mengecek email
      $email = $request->email;
      $nama = $request->nama;
      $password = $request->password;
      $password_confirm = $request->password_confirm;

      if($email == null){///ambil request email ,buatkan variabel email
          return 'email kosong';
      }
    
    //mengecek nama
    if($nama == null){///ambil request nama ,buatkan variabel nama
        return 'nama kosong';
    }
    
    ///mengecek pass
    $password = $request->password;///ambil request passwor ,buatkan variabel password
    if($password == null){
      return 'password kosong';
      }
    
    ///mengecek password_confirm
    $password_confirm = $request->password_confirm;///ambil request passwordconfirm ,buatkan variabel passworconfirm
    if($password_confirm == null){
      return 'password_confirm kosong';
      }  
 
    //mengecek validasi password
    //tidak dibuat lagi karena sudah dibuat di variabel global password dan password confirm
    if($password != $password_confirm){
        return 'password tidak sama';
    }      
      
    ////mengecek data email
      $data = User::where('email', $email)->first();
      if($data != null){
          return 'email sudah ada';
      }

     
      $user = new User();
      $user->email = $request->input('email');
      $user->name = $nama;
      $user->password = bcrypt($password);
      $user->save();

      $id = $user->id;
      Auth::loginUsingId($id);

      return redirect('dashboard');
    }
}
