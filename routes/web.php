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
//use Illuminate\Http\Request;


Route::get('/', function () {
	$matrici = \App\Interviu::all();

    return view('welcome');
});

Route::post('/lista', function (Request $request) {
	$data = $request::validate([
        'random_matrix' => 'required|max:255',
        'reordered_matrix' => 'required|max:255'
    ]);

    tap(new App\Interviu($data))->save();

    $matrici = \App\Interviu::all();

    return view('lista', ['matrici' => $matrici]);
});
