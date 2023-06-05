<?php
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    // var_dump($_FILES['img']);die;
    // $titlecat = selectparentfood($data['parent']);
    $img = uploader('img','images/hero_header/',"hero",'header');
    add_heroheader($data,$img);
    // echo '<script>window.location.href="dashbord.php?m=index&p=index&hero_heder=added";</script>';
}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add info for hero_header
        </h2>
    </div>
    <form method="post" enctype="multipart/form-data" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">header text</label>
            <input type="text" name="frm[headertext]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" name="frm[description]" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">hero_image </label>
            <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Add info</button>
    </form>
</div>