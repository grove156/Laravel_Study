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
Route::get('/blade', function(){
    return view('blade_study',['name'=>'Myeongkeun Kim', 'age'=>"29"]);
});
Route::get('/example01', function(){
    return view('example01')->with(['num'=>'20']);
});
Route::get('/ex02', function(){
    $arr=['apple','pear','banana','tomato'];
    return view('ex02',['arr'=>$arr]);
});
