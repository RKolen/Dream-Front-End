<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static $logininfo;

    public function __construct()
      {
        self::$logininfo = new \stdClass();
        self::$logininfo->loggedin = false;

        if (isset($_COOKIE['email']) && isset($_COOKIE['notpassword']))
        {
            $email = $_COOKIE['email'];
            $password = $_COOKIE['notpassword'];
            self::$logininfo = $this->validateCrendentials($email, $password);
        }
        view()->share('logininfo', self::$logininfo);
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
}
