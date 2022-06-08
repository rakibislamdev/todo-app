<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $todos = DB::table('todos')->get();
    return view('index')->with('todos', $todos);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/store', function (Request $request) {
    // return $request->all();

    DB::table('todos')->insert([
        'date' => $request->date,
        'name' => $request->name,
        'details' => $request->details
    ]);

    return redirect('/');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/homework', function () {
    $works = DB::table('homework')->get();
    return view('homework')->with('works', $works);
});

Route::get('/save', function (Request $request) {

    DB::table('homework')->insert([
        'email' => $request->email,
        'password' => $request->password,
        'website' => $request->site
    ]);

    return redirect('/homework');
});
