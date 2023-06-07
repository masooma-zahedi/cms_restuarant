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

function uploader($file,$dir,$folder,$name){
    $file = $_FILES[$file];
    if(!file_exists($dir.$folder)){
        mkdir($dir.$folder);
    }
    $filename = $file['name'];
    $array = explode('.',$filename);
    $ext = end($array);
    $newname = $name.'-'.rand().'.'.$ext;
    $from = $file['tmp_name'];
    $to = $dir.$folder.'/'.$newname;
    move_uploaded_file($from,$to);
    return $to;

}






@$m = $_GET['m'] ? $_GET['m'] : 'index';
switch ($m) {
    case 'index':
        include_once 'menu_site.php';
        include_once "menufood_cat.php";
        include_once "menufood.php";
        include_once "booktable.php";
        include_once "hero_header.php";
        include_once "clientsay.php";
        include_once "about.php";
        break;
    case 'menu_site':
        include_once "menu_site.php";
        break;
    case 'menu_food_cat':
        include_once "menufood_cat.php";
        break;
    case  'menu_food':
        include_once "menufood.php";
        break;
    case  'booktable':
        include_once "booktable.php";
        break;
    case  'hero_header':
        include_once "hero_header.php";
        break;
    case  'clientsay':
        include_once "clientsay.php";
        break;
    case  'about':
        include_once "about.php";
        break;

}

include_once "login.php";
include_once "contact.php";
include_once "setting.php";
$setting = setting();
