<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{

    public function index()
    {
      return view('authorization.login');
    }

    public function login()
    { //if logged in
      if (isset($_POST['email']) && isset($_POST['password']))
      {
          $logininfo = new \stdClass();
          $logininfo->loggedin = false;
          $loginInfo = $this->validateCrendentials($_POST['email'], $_POST['password']);
          if($loginInfo->loggedin){
            setcookie('email', $_POST['email'], time() + (86400*30), "/");
            setcookie('notpassword', $_POST['password'], time() + (86400*30), "/");
            if (isset($_POST['previous-url'])){
                return redirect($_POST['previous-url']);
            }
            else {
              return redirect('/');
            }
          }
          else {
            return redirect()->back();
          }
      } else {
        return redirect()->back();
      }
    }

    public function validateCrendentials($p_email, $p_password)
    {
      $ch = curl_init();
      $credentials = 'email=' . $p_email . '; notpassword=' . $p_password;
      curl_setopt($ch, CURLOPT_URL, env('BACKEND_URL') . '/checklogin');
      curl_setopt($ch, CURLOPT_COOKIE, $credentials);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      $logininfo = json_decode($output);
      return $logininfo;
    }

	public function logout()
    {
       setcookie('email', "", time() -3600);
       setcookie('notpassword', "", time() -3600);
       return redirect('/');
    }
}

//subscribe//check if allowed
