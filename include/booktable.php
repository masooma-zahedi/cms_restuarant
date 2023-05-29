<?php 
include_once "functions.php";
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    var_dump($data);
    $connect = config();
    $sql = "INSERT INTO booktable_tbl (name,email,date,numpeople,massage) VALUES ('$data[name]','$data[email]','$data[date]','$data[numpeople]',' $data[massage]')";
    mysqli_query($connect, $sql);
    header("location:../index.php?booking=true");
}

function list_booktable()
{
    $connect = config();
    $sql = "SELECT * FROM booktable_tbl";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function delete_booktable($id){
        $connect = config();
        $sql = "DELETE FROM booktable_tbl WHERE id = '$id'";
        mysqli_query($connect,$sql);
    }

// update movie for booktable
if(isset($_GET['name'])){
    $databook = $_POST['update'];
    $connect = config();
    $sql="INSERT INTO iframebook_tbl (iframebook) VALUES ('$databook')";
    $sql = "UPDATE iframebook_tbl SET iframebook='$databook' WHERE id ='1'";
    mysqli_query($connect,$sql);
    // var_dump($databook) ;
}


function iframebookmovie(){
    $connect = config();
    $sql = "SELECT * FROM iframebook_tbl WHERE id='1'";
    $row = mysqli_query($connect,$sql);
    $res = mysqli_fetch_assoc($row);
    return $res['iframebook'];
}








// function add_menufood_cat($data)
// {
//     $connect = config();
//     $sql = "INSERT INTO menufood_cat_tbl (title_cat,status,sort) VALUES ('$data[name]','$data[status]',' $data[sort]')";
//     mysqli_query($connect, $sql);
// }


// 
// function showedit_menufood_cat($id){
//     $connect = config();
//     $sql = "SELECT * FROM menufood_cat_tbl WHERE id = '$id'";
//     $row = mysqli_query($connect,$sql);
//     $res = mysqli_fetch_assoc($row);
//     return $res;
// }

// function edit_menufood_cat($data,$id){
//     $connect = config();
//     $sql = "UPDATE menufood_cat_tbl SET title_cat='$data[title]', status='$data[status]', sort='$data[sort]' WHERE id ='$id' ";
//     mysqli_query($connect, $sql);
// }

// function getmenufood_cat(){
//     $connect = config();
//     $sql = "SELECT * FROM menufood_cat_tbl";
//     $row = mysqli_query($connect,$sql);
//     while($res = mysqli_fetch_assoc($row)){
//         $result[] = $res;
//     }
//     return $result;
// }

// function putIcon($title_cat){
//     $title_cat = $title_cat;
//     // echo $title_cat."ko";
//     switch($title_cat){
//         case 'lunch':
//             echo "fa fa-hamburger ";
//             break;
//         case 'breakfast':
//             echo "fa fa-coffee ";
//             break;
//         case "dinner":
//             echo "fa fa-utensils ";
//             break;
//         default :
//             echo "fas fa-cheese ";
//     }
// }

