<?PHP
include_once "include/functions.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $setting['titlesite'] ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="<?php echo $setting["descriptionsite"] ?>" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><?php echo $setting['brand_name'] ?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <?PHP
                        $row = list_menu_default();
                        foreach ($row as $val) :
                        ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link <?php $rows = list_submenu_default($val['id']);
                                                            if ($rows) {
                                                                echo "dropdown-toggle";
                                                            } ?> " data-bs-toggle="dropdown"><?php echo $val['title'] ?></a>
                                <?php
                                $rows = list_submenu_default($val['id']);
                                if ($rows) :
                                ?>
                                    <div class="dropdown-menu m-0">
                                        <?php
                                        foreach ($rows as $value) :
                                        ?>
                                            <a href="booking.html" class="dropdown-item"><?php echo $value['title'] ?></a>
                                        <?php endforeach  ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        <?PHP
                        endforeach;
                        ?>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <?php
                    $heroheader = update_heroheader();
                    ?>
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft"><?php echo $heroheader['headertext'] ?></h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?php echo $heroheader['description'] ?></p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" style="width:100%;border-radius:50%" src="<?php echo './admin/'. $heroheader['hero_img'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <?php 
                                $imgabout = show_img_about();
                            ?>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo "./admin/". $imgabout['img_up_left'] ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo "./admin/". $imgabout['img_up_right'] ?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo "./admin/". $imgabout['img_down_left'] ?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo "./admin/". $imgabout['img_down_right'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us </h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                            <?php 
                                $about = show_img_about();
                                // var_dump($about);
                            ?>
                            <div><?php echo $about["dataabout"] ?></div>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-3">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-cener">
                        <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                    </div>
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 text-decoration-none " data-bs-toggle="pill" href="#tab_1">
                                <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                                <i class="fa fa-coffee fa-2x text-primary' ?>"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3 text-decoration-none" data-bs-toggle="pill" href="#tab_2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-decoration-none" data-bs-toggle="pill" href="#tab_3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-decoration-none" data-bs-toggle="pill" href="#tab_4">
                                <i class="fas fa-bread-slice fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">dessert</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- **************************** shows all menu foods********************** -->
                        <div id="tab_0" class="tab-pane fade show p-0   text-left active">
                            <div class="row g-4 ">
                                <!-- in foreach  -->
                                <?php
                                $menufood = putmenufood();
                                foreach ($menufood as $key=>$food) :
                                    if ($key <= 10) :
                                ?>
                                        <div class="col-lg-6 mb-2 " >
                                            <a type="button" class="text-muted" data-toggle="modal" data-target="#modal_<?php echo $food['id'] ?>">
                                                <div class="d-flex align-items-center">
                                                    <div class=" rounded" style="width:80px ;height:70px  ">
                                                        <img class="flex-shrink-0 img-fluid w-100 h-100  rounded" src="<?php echo "./admin/" . $food['img'] ?>" alt="" style="width:100%">
                                                    </div>
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span><?php echo $food['title'] ?></span>
                                                            <span class="text-primary"><?php echo "$" . $food['price'] ?></span>
                                                        </h5>
                                                        <small class="fst-italic"><?php echo $food['description'] ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- start modal -->
                                        <div class="modal fade" id="modal_<?php echo $food['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header"> -->
                                                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <!-- </div> -->
                                                    <div class="modal-body">
                                                        <img class="w-100 h-100" src="<?php echo "./admin/" . $food['img'] ?>" alt="<?php echo $food['title'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->
                                <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                <!-- **************************** shows breakfast menu foods********************** -->

                        <div id="tab_1" class="tab-pane fade show p-0 ">
                            <div class="row g-4">
                                <!-- in foreach  -->
                                <?php
                                $menufood = putmenufood();
                                foreach ($menufood as $food) :
                                    if ($food["title_cat"] == "1") :
                                ?>
                                        <div class="col-lg-6 mb-2">
                                            <a type="button" class="text-muted" data-toggle="modal" data-target="#modal_<?php echo $food['id'] ?>">
                                                <div class="d-flex align-items-center">
                                                    <div class="" style="width:80px">
                                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo "./admin/" . $food['img'] ?>" alt="" style="width:100%">
                                                    </div>
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span><?php echo $food['title'] ?></span>
                                                            <span class="text-primary"><?php echo "$" . $food['price'] ?></span>
                                                        </h5>
                                                        <small class="fst-italic"><?php echo $food['description'] ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- start modal -->
                                        <div class="modal fade" id="modal_<?php echo $food['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header"> -->
                                                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <!-- </div> -->
                                                    <div class="modal-body">
                                                        <img class="w-100 h-100" src="<?php echo "./admin/" . $food['img'] ?>" alt="<?php echo $food['title'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->
                                <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                        <!-- **************************** shows lunch menu foods********************** -->
                        <div id="tab_2" class="tab-pane fade show p-0 ">
                            <div class="row g-4">
                                <!-- in foreach  -->
                                <?php
                                $menufood = putmenufood();
                                foreach ($menufood as $food) :
                                    if ($food["title_cat"] == "2") :
                                ?>
                                        <div class="col-lg-6 mb-2">
                                            <a type="button" class="text-muted" data-toggle="modal" data-target="#modal_<?php echo $food['id'] ?>">
                                                <div class="d-flex  align-items-center">
                                                    <div class="" style="width:80px">
                                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo "./admin/" . $food['img'] ?>" alt="" style="width:100%">
                                                    </div>
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span><?php echo $food['title'] ?></span>
                                                            <span class="text-primary"><?php echo "$" . $food['price'] ?></span>
                                                        </h5>
                                                        <small class="fst-italic"><?php echo $food['description'] ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- start modal -->
                                        <div class="modal fade" id="modal_<?php echo $food['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header"> -->
                                                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <!-- </div> -->
                                                    <div class="modal-body">
                                                        <img class="w-100 h-100" src="<?php echo "./admin/" . $food['img'] ?>" alt="<?php echo $food['title'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->
                                <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                        <!-- **************************** shows dinner menu foods********************** -->
                        <div id="tab_3" class="tab-pane fade show p-0 ">
                            <div class="row g-4">
                                <!-- in foreach  -->
                                <?php
                                $menufood = putmenufood();
                                foreach ($menufood as $food) :
                                    if ($food["title_cat"] == "3") :
                                ?>
                                        <div class="col-lg-6 mb-2">
                                            <a type="button" class="text-muted" data-toggle="modal" data-target="#modal_<?php echo $food['id'] ?>">
                                                <div class="d-flex align-items-center">
                                                    <div class="" style="width:80px">
                                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo "./admin/" . $food['img'] ?>" alt="" style="width:100%">
                                                    </div>
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span><?php echo $food['title'] ?></span>
                                                            <span class="text-primary"><?php echo "$" . $food['price'] ?></span>
                                                        </h5>
                                                        <small class="fst-italic"><?php echo $food['description'] ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- start modal -->
                                        <div class="modal fade" id="modal_<?php echo $food['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header"> -->
                                                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <!-- </div> -->
                                                    <div class="modal-body">
                                                        <img class="w-100 h-100" src="<?php echo "./admin/" . $food['img'] ?>" alt="<?php echo $food['title'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->
                                <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                        <!-- **************************** shows dessert menu foods************************* -->
                        <div id="tab_4" class="tab-pane fade show p-0 ">
                            <div class="row g-4">
                                <!-- in foreach  -->
                                <?php
                                $menufood = putmenufood();
                                foreach ($menufood as $food) :
                                    if ($food["title_cat"] == "4") :
                                ?>
                                        <div class="col-lg-6 mb-2">
                                            <a type="button" class="text-muted" data-toggle="modal" data-target="#modal_<?php echo $food['id'] ?>">

                                                <div class="d-flex align-items-center">
                                                    <div class="" style="width:80px">
                                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo "./admin/" . $food['img'] ?>" alt="" style="width:100%">
                                                    </div>
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span><?php echo $food['title'] ?></span>
                                                            <span class="text-primary"><?php echo "$" . $food['price'] ?></span>
                                                        </h5>
                                                        <small class="fst-italic"><?php echo $food['description'] ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- start modal -->
                                        <div class="modal fade" id="modal_<?php echo $food['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header"> -->
                                                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <!-- </div> -->
                                                    <div class="modal-body">
                                                        <img class="w-100 h-100" src="<?php echo "./admin/" . $food['img'] ?>" alt="<?php echo $food['title'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->
                                <?php endif;
                                endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <!-- <div class="video"> -->
                    <!-- <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button> -->
                    <iframe width="100%" height="100%" src="./admin/images/iframemovie/<?php echo iframebookmovie() ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!-- </div> -->
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <!-- working on it -->
                        <form method="post" action="./include/booktable.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="frm[name]" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="frm[email]" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" name="frm[date]" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="frm[numpeople]" id="select1">
                                            <option value="1">People 1</option>
                                            <option value="2">People 2</option>
                                            <option value="3">People 3</option>
                                        </select>
                                        <label for="select1">Num Of People</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="frm[massage]" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="btn" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <?php 
                        $ourteam = putourteam();

                        foreach($ourteam as $team):
                    ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid w-100 h-100" src="<?php echo "./admin/".$team['img'] ?>" alt="<?php echo $team['name'] ?>">
                            </div>
                            <h5 class="mb-0"><?php echo $team['name'] ?></h5>
                            <small><?php echo $team['job'] ?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="<?php echo $team['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="<?php echo $team['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="<?php echo $team['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php
                    $clientsay = showclientsay();
                    foreach ($clientsay as $client) :
                    ?>
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p><?php echo $client['description'] ?></p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo "./admin/" . $client['img'] ?>" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1"><?php echo $client['name'] ?></h5>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6 pt-3 " >
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="<?php echo $setting['about_us'] ?>">About Us</a>
                        <a class="btn btn-link" href="<?php echo $setting['contact_us'] ?>">Contact Us</a>
                        <a class="btn btn-link" href="<?php echo $setting['booking'] ?>">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $setting['address'] ?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $setting['phone'] ?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $setting['email'] ?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="<?php echo $setting['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo $setting['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo $setting['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo $setting['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Location</h4>
                        <p>You Can Find Us:</p>
                        <div class="position-relative mx-auto border" style="max-width: 300px;">
                            <?php  echo $setting['map'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#"><?php echo $setting['brand_name'] ?></a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com"><span class="small"> HTML Codex</span></a>
                        </div>
                        <!-- <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>