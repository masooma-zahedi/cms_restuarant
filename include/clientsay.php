<?php
include_once "functions.php";

function add_clientsay($data, $img)
{
    $connect = config();
    $sql = "INSERT INTO clientsay_tbl (name,description,img) VALUES ('$data[name]','$data[description]','$img')";
    mysqli_query($connect, $sql);
}

function list_clientsay()
{
    $connect = config();
    $sql = "SELECT * FROM clientsay_tbl";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function delete_clientsay($id)
{
    $connect = config();
    $sql = "DELETE FROM clientsay_tbl WHERE id = '$id'";
    mysqli_query($connect, $sql);
}


// for web page
function showclientsay(){
    $connect = config();
    $sql = "SELECT * FROM clientsay_tbl";
    $row = mysqli_query($connect,$sql);
    while($res = mysqli_fetch_assoc($row)){
        $result[] = $res;
    }
    return $result;
}





