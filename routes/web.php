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
    $members =[
        ['name'=>'Kim','age'=>'28', 'address'=>'Melbourne'],
        ['name'=>'Myeongkeun','age'=>'30', 'address'=>'Seoul']
      ];
    return view('ex02',['members'=>$members, 'arr'=>$arr]);
});
Route::get('/ex04', function(){
  $members =[
      ['name'=>'Kim','age'=>'28', 'address'=>'Melbourne'],
      ['name'=>'Myeongkeun','age'=>'30', 'address'=>'Seoul']
    ];
  return view('example04',['members'=>$members]);
});

Route::get('task', 'TaskController@task');

Route::get('param/{id?}/{arg?}', 'TaskController@param');

Route::resource('articles', 'ArticlesController');

Route::get('auth/login',function(){
  $loginInfos = [
    'email'=>'test@test.com',
    'password'=>'password'
  ];
  if(!auth()->attempt($loginInfos)){
    //attemp takes array, bool $remember = false
    return 'login unsuccessful';
  }
    return redirect('loginOk');

});

Route::get('loginOk',['middle'=>'auth',function(){
  dump(session()->all());
//  if(!auth()->check()){
//    return 'who are you?';
//  }
    return 'hello'. auth()->user()->name;
}]);

Route::get('auth/logout',function(){
  auth()->logout();
  return 'you are logged out!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('impl','ImplicitController');
