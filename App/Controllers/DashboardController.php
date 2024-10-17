<?php

namespace App\Controllers;

class DashboardController
{
  public function index()
  {
    view('dashboard_home', ['title' => 'Dashboard - Home']);
  }
}
