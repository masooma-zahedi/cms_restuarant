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

function add_menu($data)
{
    $connect = config();
    $sql = "INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[name]','$data[url]','$data[status]','$data[parent]',' $data[sort]')";
    mysqli_query($connect, $sql);
}

function submenu()
{
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE chid = '0'";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function list_menu_admin()
{
    $connect = config();
    $sql = "SELECT * FROM menu_tbl";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function selectparent($chid){
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE id ='$chid'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title'];
}

function delete_menu($id){
    $connect = config();
    $sql = "DELETE FROM menu_tbl WHERE id = '$id'";
    mysqli_query($connect,$sql);
}


include_once "login.php";
