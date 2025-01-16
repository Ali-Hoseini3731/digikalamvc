<?php

$url = explode("/", $_GET["url"]);

print_r($url);

$controller = $url[0];
unset($url[0]);

$method = $url[1];
unset($url[1]);

$params = array_values($url);
print_r($params);

require "controllers/" . $controller . ".php";
$object = new $controller;
call_user_func_array([$object, $method], $params);

?>