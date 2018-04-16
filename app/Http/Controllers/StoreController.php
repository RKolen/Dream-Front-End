<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends MainController
{

  public function index()
  {
    return view('store.index');
  }
}
