<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends MainController
{
  public function show($game)
  {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, env('BACKEND_URL') . '/games/' . $game);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      $gameinfo = json_decode($output);
      return view('game.index', compact('gameinfo'));
  }
}
