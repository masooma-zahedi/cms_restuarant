<?php
include_once "functions.php";
function user_login($data){
    // echo "hi";
    // var_dump($data);die;
    $connect = config();
    $sql = "SELECT * FROM admin_tbl WHERE username = '$data[username]' ";
    $row = mysqli_query($connect,$sql);
    $res = mysqli_fetch_assoc($row);
    if(isset($res['username'])){
        if($res['password'] == $data['password']){
            $_SESSION['username'] = $res['name'];
            header("location:../admin/dashbord.php?m=index&p=index");
        }
        else{
            header("location:../admin/index.php?login=error");
        }
    }
}