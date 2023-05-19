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

function showedit_menu($id){
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE id = '$id'";
    $row = mysqli_query($connect,$sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}
// ///////////////
function edit_menu($data,$id){
    // var_dump($data);
    // var_dump($id);die;
    $connect = config();
    $sql = "UPDATE menu_tbl SET title='$data[title]', url='$data[url]', status='$data[status]', sort='$data[sort]', chid='$data[parent]' WHERE id ='$id' ";
    mysqli_query($connect, $sql);
}

function list_menu_default()
{
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC ";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
function list_submenu_default($id)
{
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ";
    $row = mysqli_query($connect, $sql);
    if(mysqli_num_rows($row)> 0){
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}





include_once "login.php";
