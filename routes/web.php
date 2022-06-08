<?php

use App\Models\Todo;
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
    $todos = Todo::all();
    return view('index')->with('todos', $todos);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit/{id}', function ($id) {
    $todo = Todo::find($id);
    return view('edit')->with('todo', $todo);;
});

Route::get('/update/{id}', function ($id, Request $request) {
    Todo::where('id', $request->id)
        ->update([
            'date' => $request->date,
            'name' => $request->name,
            'details' => $request->details
        ]);

    return redirect('/');
});

Route::get('/delete/{id}', function ($id) {
    $todo = Todo::where('id', $id)->delete();

    return redirect('/');
});

Route::get('/store', function (Request $request) {
    // return $request->all();

    Todo::create($request->all());

    return redirect('/');
});

// home work

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
