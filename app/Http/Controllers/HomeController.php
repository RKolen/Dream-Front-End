<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env('BACKEND_URL') . '/games');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        $games = json_decode($output);
        return view('home.index', compact('games'));
    }

}
