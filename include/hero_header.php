<?php
// there is problem here ==> update data
// function add_heroheader($data, $img)
// {
//     $connect = config();
//     $sql = "INSERT INTO hero_header_tbl (headertext,description,hero_img) VALUES ('$data[headertext]','$data[description]','$img')";
//     mysqli_query($connect, $sql);
// }

// function list_heroheader()
// {
//     $connect = config();
//     $sql = "SELECT * FROM hero_header_tbl";
//     $row = mysqli_query($connect, $sql);
//     while ($res = mysqli_fetch_assoc($row)) {
//         $result[] = $res;
//     }
//     return $result;
// }
// update  

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
