<?php
require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['conn'] = function(){
    return new \Source\Conn('mysql:host=0.0.0.0;dbname=crud', 'root', 'root');
};

$container['user'] = function($c){
    return new \Source\User($c['conn']);
};

$container['product'] = function($c){
    return new \Source\Product($c['conn']);
};

$list = $container['user']->list();
$product = $container['product']->listProduct();

echo "<pre>";
var_dump($product);
echo "</pre>";


echo "<pre>";
var_dump($list);
echo "</pre>";


 exit();