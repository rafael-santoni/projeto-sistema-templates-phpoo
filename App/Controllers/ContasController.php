<?php

namespace App\Controllers;

class ContasController
{
  public function index()
  {
    view('dashboard_contas', ['title' => 'Dashboard | Contas']);
  }
}
