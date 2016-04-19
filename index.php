<?php
/**
 * Flight Core autoload
 */
require 'vendor/autoload.php';
/**
 * Eloquent load
 */
require 'db.php';
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model;

/**
 * All API go here..
 */

Flight::route('/', function(){
    //Flight::json(['id'=>22]);
    //class User extends Model {}
    //$user = User::all();
    $users = DB::table('users')->get();
    Flight::json($users);
});

Flight::start();
