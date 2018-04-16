<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends MainController
{

  public function index($user)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, env('BACKEND_URL') . '/profile/' . $user);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $userinfo = json_decode($output);

    return view('user.index', compact('userinfo'));
  }
}
