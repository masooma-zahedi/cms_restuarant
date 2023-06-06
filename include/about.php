<?php
include_once "functions.php";

function update_img_about( $img1,$img2,$img3,$img4)
{
    $connect = config();
    $sql = "UPDATE img_about_tbl SET img_up_right='$img1',img_up_left='$img2',img_down_left='$img3',img_down_right='$img4'  WHERE id ='1'";
    mysqli_query($connect, $sql);
}

function show_img_about(){
    $connect = config();
    $sql = "SELECT * FROM img_about_tbl";
    $row = mysqli_query($connect,$sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}







// include_once "functions.php";

// function add_clientsay($data, $img)
// {
//     $connect = config();
//     $sql = "INSERT INTO clientsay_tbl (name,description,img) VALUES ('$data[name]','$data[description]','$img')";
//     mysqli_query($connect, $sql);
// }

// function list_clientsay()
// {
//     $connect = config();
//     $sql = "SELECT * FROM clientsay_tbl";
//     $row = mysqli_query($connect, $sql);
//     while ($res = mysqli_fetch_assoc($row)) {
//         $result[] = $res;
//     }
//     return $result;
// }

// function delete_clientsay($id)
// {
//     $connect = config();
//     $sql = "DELETE FROM clientsay_tbl WHERE id = '$id'";
//     mysqli_query($connect, $sql);
// }


// for web page





