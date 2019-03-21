<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//LOGIN
Route::get('/login', function(){
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('login');
})->name('login');
Route::post('/login', 'UserController@login');
//REGISTER
Route::get('/register', function(){
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('register');
});

Route::post('/register', 'UserController@register');
///End Halaman Register
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Route::middleware(['auth'])->group(function () {
   Route::get('/user', function(){
        return view('user');
   });
   Route::get('/dashboard', function(){
        return view('dashboard');
    });
   Route::get('/admin', function(){
        $role = Auth::user()->role;
        if($role != 'admin'){
            return 'kowe ora entuk mlebu bos';
        }
        return view('admin.index');
   });
    //Start Film  
    Route::get('film', 'FilmController@index');
    Route::get('film/add', 'FilmController@add');
    Route::post('film', 'FilmController@create');
    
    // Edit
    Route::get('film/{id}/edit', 'FilmController@edit');
    Route::post('film/{id}/edit', 'FilmController@update');
    // Delete
    Route::get('film/{id}/delete', 'FilmController@delete');
    Route::get('film/{id}/confirmDelete', 'FilmController@confirmDelete');
});
//detail
Route::get('film/{id}', 'FilmController@detail');
///End Film
Route::get('/downloadPDF/{id}','FilmController@downloadPDF');