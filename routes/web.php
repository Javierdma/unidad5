<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/suma/{n1}/{n2}', function (string $n1, string $n2) {
    return $n1+$n2;
})->where(['n1'=>'[0-9]+','n2'=>'[0-9]+']);
Route::get('/resta/{n1}/{n2}', function (string $n1, string $n2) {
    return $n1-$n2;
})->where(['n1'=>'[0-9]+','n2'=>'[0-9]+']);
Route::get('/multiplicacion/{n1}/{n2}', function (string $n1, string $n2) {
    return $n1*$n2;
})->where(['n1'=>'[0-9]+','n2'=>'[0-9]+']);
Route::get('division/{n1}/{n2}', function (string $n1, string $n2) {
    return $n1/$n2;
})->where(['n1'=>'[0-9]+','n2'=>'[0-9]+']);
Route::get('/hola/{name}/{lastname?}', function (string $name, ?string $lastname = "Doe") {
    return 'Hola '.$name.' '.$lastname;
})->where(['name'=>'[a-z]+','lastname'=>'[a-z]+']);
Route::get('/saludo/{name}', function (string $name) {
    return view('example',['name'=>$name]);
})->where(['name'=>'[a-z]+']);