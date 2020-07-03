<?php
namespace controllers;
class UrlController {


public function url(){

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$url=trim($url,'/');
$url=str_replace('\\', '/', $url);
$url=explode('/', $url,3);
$params=$url[2];
$params =explode('/', $params);
$id= $params[0];
return $id;


}



}