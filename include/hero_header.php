<?php

function add_heroheader($data, $img)
{
    $connect = config();
    $sql = "UPDATE hero_header_tbl SET headertext='$data[headertext]', description='$data[description]', hero_img='$img' WHERE id ='1'";
    $row =mysqli_query($connect, $sql);
}

function update_heroheader()
{
    $connect = config();
    $sql = "SELECT * FROM hero_header_tbl";  
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

// $testhero = add_heroheader($data, $img);
