<?php
require_once("../vendor/autoload.php");
$route =  new  \App\Route;
echo'ola mundo';

print_r($route->getUrl());
echo'<hr>';
echo'<pre>';
print_r($route->getRoutes());
echo'</pre>';
?>