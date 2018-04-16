<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends MainController
{
  
  public function index()
  {
    if (self::$logininfo->loggedin == true)
    {
      return redirect('/');
    }
    return view('authorization.login');
  }

  public function login()
  {
    if (isset($_POST['email']) && isset($_POST['password']))
    {
      $logininfo = new \stdClass();
      $logininfo->loggedin = false;
      $logininfo = $this->validateCrendentials($_POST['email'], $_POST['password']);

      if($logininfo->loggedin)
      {
        setcookie('email', $_POST['email'], time() + (86400*30), "/", env('DOMAIN_NAME'));
        setcookie('notpassword', $_POST['password'], time() + (86400*30), "/", env('DOMAIN_NAME'));
        
        if (isset($_POST['previous-url']))
        {
          return redirect($_POST['previous-url']);
        }
        else 
        {
          return redirect('/');
        }
      }
      else 
      {
        return redirect()->back();
      }
    } else 
    {
      return redirect()->back();
    }
  }

public function logout()
  {
    setcookie('email', "", time() -3600, "/", env('DOMAIN_NAME'));
    setcookie('notpassword', "", time() -3600, "/", env('DOMAIN_NAME'));

    return redirect('/');
  }

  public function register()
  {
    return view('user.register');
  }
}

