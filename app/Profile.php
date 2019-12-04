<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = ['tel','address'];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
