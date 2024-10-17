<?php

namespace App\Framework\Classes;

class Macros
{
  public function lower(string $value)
  {
    return strtolower($value);
  }
  
  public function upper(string $value)
  {
    return strtoupper($value);
  }

  public function session(string $session)
  {
    return $_SESSION[$session] ?? '';
  }
}
