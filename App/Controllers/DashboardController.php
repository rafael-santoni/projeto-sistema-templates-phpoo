<?php

namespace App\Controllers;

use App\Framework\Classes\Cache;
use App\Framework\Database\Connection;

class DashboardController
{
  public function index()
  {
    
    // $query = $connection->query("SELECT * FROM users LIMIT 10");
    // $users = $query->fetchAll();
    
    $users = Cache::get('user', function() {
      $connection = Connection::getConnection();
      $query = $connection->query("SELECT * FROM users LIMIT 10");
      return $query->fetchAll();
    }, 1);

    view('dashboard_home', ['title' => 'Dashboard - Home', 'users' => $users]);
  }
}
