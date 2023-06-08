<?php

function add_ourteam($data, $img)
{
    // var_dump($data);die;
    $connect = config();
    $sql = "INSERT INTO ourteam_tbl (name,img,job,facebook,instagram,twitter) VALUES ('$data[name]','$img','$data[job]','$data[facebook]','$data[instagram]','$data[twitter]')";
    mysqli_query($connect, $sql);
}

function list_ourteam()
{
    $connect = config();
    $sql = "SELECT * FROM ourteam_tbl";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function delete_team($id)
{
    $connect = config();
    $sql = "DELETE FROM ourteam_tbl WHERE id = '$id'";
    mysqli_query($connect, $sql);
}

function showedit_team($id)
{
    $connect = config();
    $sql = "SELECT * FROM ourteam_tbl WHERE id = '$id'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function edit_ourteam($data, $id, $img)
{
    $connect = config();
    $sql = "UPDATE `ourteam_tbl` SET `name`='$data[name]',`img`='$img',`job`='$data[job]',`facebook`='$data[facebook]',`instagram`='$data[instagram]',`twitter`='$data[twitter]' WHERE id='$id'";
    mysqli_query($connect, $sql);
}

function putourteam(){
    $connect = config();
    $sql = "SELECT * FROM ourteam_tbl";
    $row = mysqli_query($connect,$sql);
    while($res = mysqli_fetch_assoc($row)){
        $result[] = $res;
    }
    return $result;
}


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
