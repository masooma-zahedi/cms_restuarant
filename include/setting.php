<?php

function setting()
{
    $connect = config();
    $sql = "SELECT * FROM setting_tbl";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function edit_setting($data)
{
    $connect = config();
    $sql =" UPDATE setting_tbl SET titlesite='$data[titlesite]',`descriptionsite`='$data[descriptionsite]',`brand_name`='$data[brand_name]',`brand_img`='$data[brand_img]',`about_us`='$data[about_us]',`contact_us`='$data[contact_us]',`booking`='$data[booking]',`phone`='$data[phone]',`email`='$data[email]',`address`='$data[address]',`map`='$data[map]',`facebook`='$data[facebook]',`instagram`='$data[instagram]',`twitter`='$data[twitter]',`youtube`='$data[youtube]',`linkedin`='$data[linkedin]' WHERE 1";
    mysqli_query($connect, $sql);
}




// include_once "functions.php";
// function add_menufood($data, $img)
// {

//     $connect = config();
//     $sql = "INSERT INTO menufood_tbl (title,description,price,title_cat,img) VALUES ('$data[title]','$data[description]','$data[price]','$data[parent]','$img')";
//     mysqli_query($connect, $sql);
// }


// function delete_menufood($id)
// {
//     $connect = config();
//     $sql = "DELETE FROM menufood_tbl WHERE id = '$id'";
//     mysqli_query($connect, $sql);
// }

// function showedit_menufood($id)
// {
//     $connect = config();
//     $sql = "SELECT * FROM menufood_tbl WHERE id = '$id'";
//     $row = mysqli_query($connect, $sql);
//     $res = mysqli_fetch_assoc($row);
//     return $res;
// }


// // working on category
// function submenufood()
// {
//     $connect = config();
//     $sql = "SELECT * FROM menufood_cat_tbl ";
//     $row = mysqli_query($connect, $sql);
//     while ($res = mysqli_fetch_assoc($row)) {
//         $result[] = $res;
//     }
//     return $result;
// }

// function selectparentfood($chid)
// {
//     $connect = config();
//     $sql = "SELECT * FROM menufood_cat_tbl WHERE id ='$chid'";
//     $row = mysqli_query($connect, $sql);
//     $res = mysqli_fetch_assoc($row);
//     return $res['title_cat'];
// }







// // for web page
// function putmenufood(){
//     $connect = config();
//     $sql = "SELECT * FROM menufood_tbl";
//     $row = mysqli_query($connect,$sql);
//     while($res = mysqli_fetch_assoc($row)){
//         $result[] = $res;
//     }
//     return $result;
// }




// // it is for select cat and show menufood by category but is some problem and it does not work ; link in forloop does not work so href does not work;

// // if (isset($_GET["title"])) {
// //     echo "title_cat is set: " . $_GET['title'] . "<br>";
// //     function putmenufood()
// //     {
// //         $gettitle = $_GET['title'];
// //         $connect = config();
// //         $sqlcat = "SELECT * FROM menufood_cat_tbl WHERE title_cat='$gettitle'";
// //         $rowcat = mysqli_query($connect, $sqlcat);
// //         $rescat = mysqli_fetch_assoc($rowcat);

// //         $sqlfood = "SELECT * FROM menufood_tbl WHERE title_cat='$rescat[id]'";
// //         $row = mysqli_query($connect, $sqlfood);

// //         while ($res = mysqli_fetch_assoc($row)) {
// //             $result[] = $res;
// //         }
// //         return $result;
// //         header("location:index.php");
// //     }
// //     putmenufood();
// // } else {
// //     function putmenufood()
// //     {
// //         $connect = config();
// //         $sql = "SELECT * FROM menufood_tbl";
// //         $row = mysqli_query($connect, $sql);

// //         while ($res = mysqli_fetch_assoc($row)) {
// //             $result[] = $res;
// //         }
// //         return $result;
// //         header("location:index.php");
// //     }
// // }













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
