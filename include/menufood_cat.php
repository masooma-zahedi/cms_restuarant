<?php
function add_menufood_cat($data)
{
    $connect = config();
    $sql = "INSERT INTO menufood_cat_tbl (title_cat,status,sort) VALUES ('$data[name]','$data[status]',' $data[sort]')";
    mysqli_query($connect, $sql);
}

function list_menufood_cat()
{
    $connect = config();
    $sql = "SELECT * FROM menufood_cat_tbl";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function delete_menufood_cat($id){
    $connect = config();
    $sql = "DELETE FROM menufood_cat_tbl WHERE id = '$id'";
    mysqli_query($connect,$sql);
}

function showedit_menufood_cat($id){
    $connect = config();
    $sql = "SELECT * FROM menufood_cat_tbl WHERE id = '$id'";
    $row = mysqli_query($connect,$sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function edit_menufood_cat($data,$id){
    $connect = config();
    $sql = "UPDATE menufood_cat_tbl SET title_cat='$data[title]', status='$data[status]', sort='$data[sort]' WHERE id ='$id' ";
    mysqli_query($connect, $sql);
}
