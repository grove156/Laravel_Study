<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    //GET impl/index call
    public function getIndex(){
      return 'getIndex';
    }
    //GET impl/show/4 call
    public function getShow($id){
      return 'getShow: '.$id;
    }
    //POST impl/profile
    public function postProfile(){
      return 'getProfile';
    }
    //GET impl/aa/bb call
    public function getAaBb(){
      return 'getAaBb';
    }
}
