<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends MainController
{

  public function index($user){
    return view('user.index');
  }

}
