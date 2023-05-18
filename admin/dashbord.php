<?php
include_once "../include/functions.php";
if(!isset($_SESSION['username'])){
    header("location:index.php?login=first");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>
    <link rel="stylesheet" href="../css/adminstyle.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="sabaStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container  dashbord">
        <div class="card my-3 ">
            <h5 class="card-body text-center text-info">
                Hi <?php echo $_SESSION['username'] ?>
            </h5>
        </div>
        <div class="row">
            <div class="col-3 border border-success navsidediv" style="min-height: 500px;">
                <ul style="list-style:none;">
                    <li>
                        <a href="dashbord.php?m=index&p=index">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TopMenu
                        </a>
                        <div class="dropdown-menu p-0  text-light" style="background-color:black" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item badge badge-primary" style="background-color:black" href="dashbord.php?m=menu&p=list">List Menu</a>
                            <a class="dropdown-item badge badge-primary" style="background-color:black" href="dashbord.php?m=menu&p=add">Add Menu</a>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-9 border border-primary">
                <section class="wrapper ">
                    <?php
                        @$m = $_GET["m"]?$_GET['m']:'index' ;
                        @$p = $_GET["p"]?$_GET['p']:'index ';
                        include_once "$m/$p.php";
                    ?>
                </section>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>