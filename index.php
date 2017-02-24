<?php 
require_once $_SERVER['HTTP_HOST']. "/application/views/config/functions.php";
require_once $_SERVER['HTTP_HOST']. '/application/bootstrap.php';
require_once $_SERVER['HTTP_HOST']. '/application/controllers/Controller.php';
require_once $_SERVER['HTTP_HOST']. '/application/controllers/View.php';
$app = new Bootstrap();
echo $_SERVER['HTTP_HOST']. "/application/views/anketa.php";
?>
