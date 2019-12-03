<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
      $task = ['name'=>'Task 1', 'due_date'=>'2019-12-22 12:00:00'];
      return view('task')->with('task',$task);
    }

    public function param(Request $request, $id=1, $arg='argument'){
        //return ['id'=>$id, 'arg'=>$arg];
        //return $request->path(); //path() method is showing the current URL's path

        dump(
          ['path'=>$request->path(),
          'url'=>$request->url(),
          'fullurl'=>$request->fullUrl(),
          'method'=>$request->method(),
          'aaa'=>$request->get('pa'),
          'ajax'=>$request->ajax(),
          'header'=>$request->header()
          ]
      );
    }
}
