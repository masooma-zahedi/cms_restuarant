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

@$m = $_GET['m'] ? $_GET['m'] : 'index';
switch ($m) {
    case 'index':
        include_once 'menu_site.php';
        include_once "menufood_cat.php";
        include_once "menufood.php";
        break;
    case 'menu_site':
        include_once "menu_site.php";
        break;
    case 'menufood_cat':
        include_once "menufood_cat.php";
        break;
    case  'menufood.php':
        include_once "menufood.php";
        break;

}

include_once "login.php";
