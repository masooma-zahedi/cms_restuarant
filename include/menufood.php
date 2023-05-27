<?php
include_once "functions.php";
function add_menufood($data, $img)
{

    $connect = config();
    $sql = "INSERT INTO menufood_tbl (title,description,price,title_cat,img) VALUES ('$data[title]','$data[description]','$data[price]','$data[parent]','$img')";
    mysqli_query($connect, $sql);
}

function list_menufood()
{
    $connect = config();
    $sql = "SELECT * FROM menufood_tbl";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function delete_menufood($id)
{
    $connect = config();
    $sql = "DELETE FROM menufood_tbl WHERE id = '$id'";
    mysqli_query($connect, $sql);
}

function showedit_menufood($id)
{
    $connect = config();
    $sql = "SELECT * FROM menufood_tbl WHERE id = '$id'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function edit_menufood($data, $id, $img)
{
    $connect = config();
    $sql = "UPDATE menufood_tbl SET title='$data[title]', description='$data[description]', price='$data[price]', title_cat='$data[parent]', img='$img' WHERE id ='$id' ";
    mysqli_query($connect, $sql);
}

// working on category
function submenufood()
{
    $connect = config();
    $sql = "SELECT * FROM menufood_cat_tbl ";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function selectparentfood($chid)
{
    $connect = config();
    $sql = "SELECT * FROM menufood_cat_tbl WHERE id ='$chid'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title_cat'];
}







// for web page
function putmenufood(){
    $connect = config();
    $sql = "SELECT * FROM menufood_tbl";
    $row = mysqli_query($connect,$sql);
    while($res = mysqli_fetch_assoc($row)){
        $result[] = $res;
    }
    return $result;
}




// it is for select cat and show menufood by category but is some problem and it does not work ; link in forloop does not work so href does not work;

// if (isset($_GET["title"])) {
//     echo "title_cat is set: " . $_GET['title'] . "<br>";
//     function putmenufood()
//     {
//         $gettitle = $_GET['title'];
//         $connect = config();
//         $sqlcat = "SELECT * FROM menufood_cat_tbl WHERE title_cat='$gettitle'";
//         $rowcat = mysqli_query($connect, $sqlcat);
//         $rescat = mysqli_fetch_assoc($rowcat);

//         $sqlfood = "SELECT * FROM menufood_tbl WHERE title_cat='$rescat[id]'";
//         $row = mysqli_query($connect, $sqlfood);

//         while ($res = mysqli_fetch_assoc($row)) {
//             $result[] = $res;
//         }
//         return $result;
//         header("location:index.php");
//     }
//     putmenufood();
// } else {
//     function putmenufood()
//     {
//         $connect = config();
//         $sql = "SELECT * FROM menufood_tbl";
//         $row = mysqli_query($connect, $sql);

//         while ($res = mysqli_fetch_assoc($row)) {
//             $result[] = $res;
//         }
//         return $result;
//         header("location:index.php");
//     }
// }













// // ///////////////

// function list_menu_default()
// {
//     $connect = config();
//     $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC ";
//     $row = mysqli_query($connect, $sql);
//     while ($res = mysqli_fetch_assoc($row)) {
//         $result[] = $res;
//     }
//     return $result;
// }
// function list_submenu_default($id)
// {
//     $connect = config();
//     $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ";
//     $row = mysqli_query($connect, $sql);
//     if(mysqli_num_rows($row)> 0){
//         while ($res = mysqli_fetch_assoc($row)) {
//             $result[] = $res;
//         }
//         return $result;
//     }
// }
