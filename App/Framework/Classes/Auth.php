<?php

namespace App\Framework\Classes;

class Auth
{
  public static function check(string $type)
  {
    switch ($type) {
      case 'auth':
        if(!isset($_SESSION['logged'])) {
          return redirect('/');
        }
      break;
      
      default:
        # code...
      break;
    }
  }
}
