<?php
session_start();
function config()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "CMS";
    $connect = mysqli_connect($server, $user, $password, $db);
    return $connect;
}

$m=$_GET["m"];
switch($m){
    case 'menu_site':
        include_once "menu_site.php";
        include_once "menufood_cat.php";
        break;
    case 'menu_food':
        include_once "menufood_cat.php";
        break;
}




include_once "login.php";
