<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
require 'db.php';
Flight::route('/', function(){
    //Flight::json(['id'=>22]);
    $users = Capsule::table('users')->get();
    Flight::json($users);
});

Flight::start();
