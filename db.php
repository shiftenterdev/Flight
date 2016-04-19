<?php
use Illuminate\Database\Capsule\Manager as DB;

$db = new DB;

$db->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'DATABASE',
    'username'  => 'USER',
    'password'  => 'PASSWORD',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


// Make this db instance available globally via static methods...
$db->setAsGlobal();

// Setup the Eloquent ORM..
$db->bootEloquent();