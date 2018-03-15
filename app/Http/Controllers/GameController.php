<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    public function get() 
    {

    	$ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080"); 

        //return the transfer as a string 
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);

		$games = json_decode($output);
        //dd($games);
        //echo $games[0]->title;
        return view('welcome', compact('games'));

    }
}
