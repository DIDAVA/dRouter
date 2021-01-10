<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './class/x.php';
$router = new Router();

$router->get( '/p1', function(){
  echo 'Page 1';
});

$router->get( '/p2', function(){
  echo 'Page 2';
});

$router->get( '/p/{id}', function($id){
  echo 'Page ' . $id;
});

$router->run();