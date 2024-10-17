<?php


return [
  'get' => [
    '/' => 'HomeController@index',
    '/login' => 'LoginController@index',
    '/logout' => 'LoginController@destroy',
    '/dashboard' => 'DashboardController@index:auth'
  ],
  'post' => [
    '/login' => 'LoginController@store',
  ]
];