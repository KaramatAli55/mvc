<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule=new Capsule();
//this will connect the Database mvc
$capsule-> addConnection([
  driver=>'mysql',
  host=>'localhost',
  username=>'root',
  password=>'123',
  database=>'mvc',
  charset=>'utf8',
  collation=>'utf8_unicode_ci',
  prefix=>''

]);
$capsule->bootEloquent();

 ?>
