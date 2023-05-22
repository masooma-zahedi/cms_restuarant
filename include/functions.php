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


include_once "menu_site.php";
include_once "menufood_cat.php";
include_once "menufood.php";
include_once "login.php";